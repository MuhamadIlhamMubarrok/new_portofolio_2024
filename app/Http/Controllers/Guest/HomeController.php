<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Client;
use App\Models\Count;
use App\Models\Message;
use App\Models\News;
use App\Models\Projek;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use App\Mail\ContactFormSubmitted;
use App\Mail\Pengirim;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Exception;

class HomeController extends Controller
{
    public function AboutUs()
    {
        $client = Client::all();
        return view('aboutus', compact('client'));
    }
    public function ContactUs()
    {
        $client = Client::all();
        return view('contactus', compact('client'));
    }
    public function news(Request $request)
    {
        $query = News::query();
        $client = Client::all();

        // Filter by search term
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function ($q) use ($search) {
                $q->where('title', 'LIKE', '%' . $search . '%')->orWhere('deskripsi', 'LIKE', '%' . $search . '%');
            });
        }

        // Filter by category
        if ($request->has('category') && !empty($request->input('category'))) {
            $category = $request->input('category');
            $query->where('category', $category);
        }

        // Fetch filtered data
        $news = $query->paginate(6);

        return view('news', compact('news', 'client'));
    }

    public function DetailHome()
    {
        $client = Client::all();
        return view('detailProduct', compact('client'));
    }

    public function OurClient()
    {
        $client = Client::all();
        $clients = Client::all();
        return view('ourclients', compact('clients', 'client'));
    }
    public function LandingPage()
    {
        $counts = Count::all();
        $projects = Projek::all();
        $skill = Skill::all();
        $certificate = Certificate::all();
        $news = News::all();
        $client = Client::all();

        $logoPaths = collect(File::files(public_path('storage/logo_client')))
        ->filter(fn($file) => in_array($file->getExtension(), ['png', 'jpg', 'jpeg', 'webp']))
        ->map(fn($file) => asset('storage/logo_client/' . $file->getFilename()))
        ->toArray();
        return view('landingpage', compact('counts', 'skill', 'certificate', 'news', 'projects', 'client', 'logoPaths'));
    }

    public function DetailNews(string $slug)
    {
        $news = News::where('slug',$slug)->first();
        $client = Client::all();
        $other = News::where('id', '!=', $slug)->get();
        if ($news) {
            return view('detailNews', compact('news', 'other', 'client'));
        } else {
            abort(404, 'News Details Not Found');
        }
    }

    public function DetailProject(string $slug)
    {
        $client = Client::all();
        $project = Projek::where('slug', $slug)->first();
        $other = Projek::where('id', '!=', $slug)->get();
        if ($project) {
            return view('detailProject', compact('project', 'other', 'client'));
        } else {
            abort(404, 'Project Details Not Found');
        }
    }

    public function submitContactForm(Request $request)
    {
        $request->merge([
            'nomer' => preg_replace('/[^0-9]/', '', $request->nomer),
        ]);

        // Validasi Input
        $validator = Validator::make(
            $request->all(),
            [
                'nama' => 'required|string|max:255',
                'nama_instansi' => 'required|string|max:255',
                'nomer' => 'required|regex:/^[0-9]{10,13}$/',
                'status' => 'required|in:mahasiswa,pekerja,perusahaan',
                'deskripsi' => 'required|string|max:1000',
                'email' => 'required|email|max:255',
                'g-recaptcha-response' => 'required',
            ],
            [
                'nama.required' => 'Nama lengkap wajib diisi.',
                'nama.string' => 'Nama lengkap harus berupa teks.',
                'nama.max' => 'Nama lengkap maksimal 255 karakter.',

                'nama_instansi.required' => 'Nama instansi wajib diisi.',
                'nama_instansi.string' => 'Nama instansi harus berupa teks.',
                'nama_instansi.max' => 'Nama instansi maksimal 255 karakter.',

                'nomer.required' => 'Nomor WhatsApp wajib diisi.',
                'nomer.regex' => 'Nomor WhatsApp harus terdiri dari 10 hingga 13 digit angka.',

                'status.required' => 'Status wajib dipilih.',
                'status.in' => 'Status yang dipilih tidak valid.',

                'deskripsi.required' => 'Deskripsi wajib diisi.',
                'deskripsi.string' => 'Deskripsi harus berupa teks.',
                'deskripsi.max' => 'Deskripsi maksimal 1000 karakter.',

                'email.required' => 'Alamat email wajib diisi.', 
                'email.email' => 'Alamat email yang dimasukkan tidak valid.', 
                'email.max' => 'Alamat email maksimal 255 karakter.',

                'g-recaptcha-response.required' => 'Silakan verifikasi reCAPTCHA.',
            ],
        );


        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => '6LeYjM8qAAAAAI1WgnBwx2zSYHIBhhcR-7INZPH4',
            'response' => $request->input('g-recaptcha-response'),
        ]);

        if (!$response->json('success')) {
            return back()->withErrors(['captcha' => 'Captcha tidak valid.']);
        }

        // Simpan ke database
        $message = Message::create($request->only(['nama', 'nama_instansi', 'nomer', 'status', 'deskripsi', 'email']));

       try {
            Mail::to('milhammubarrok@gmail.com')->send(new ContactFormSubmitted($message));
        } catch (Exception $e) {
            Log::error('Gagal mengirim email ke admin: ' . $e->getMessage());
        }

        try {
            Mail::to($request->email)->send(new Pengirim($message));
        } catch (Exception $e) {
            Log::error('Gagal mengirim email ke user (' . $request->email . '): ' . $e->getMessage());
        }

        return back()->with('success', 'Pesan Anda telah dikirim.');
    }
}
