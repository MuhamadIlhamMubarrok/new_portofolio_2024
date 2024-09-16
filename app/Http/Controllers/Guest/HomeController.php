<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Certificate;
use App\Models\Client;
use App\Models\Count;
use App\Models\News;
use App\Models\Projek;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class HomeController extends Controller
{
    public function AboutUs()
    {
        return view('aboutus');
    }
    public function ContactUs()
    {
        return view('contactus');
    }
    public function news(Request $request)
    {
        $query = News::query();

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
        $news = $query->get();

        return view('news', compact('news'));
    }

    public function DetailHome()
    {
        return view('detailProduct');
    }

    public function OurClient()
    {
        $clients = Client::all();
        return view('ourclients', compact('clients'));
    }
    public function LandingPage()
    {
        $counts = Count::all();
        $projects = Projek::all();
        $skill = Skill::all();
        $certificate = Certificate::all();
        $news = News::all();
        return view('landingpage', compact('counts', 'skill', 'certificate', 'news', 'projects'));
    }

    public function DetailNews(string $id)
    {
        $news = News::find($id);
        $other = News::where('id', '!=', $id)->get();
        if ($news) {
            return view('detailNews', compact('news', 'other'));
        } else {
            abort(404, 'News Details Not Found');
        }
    }

     public function DetailProject(string $id)
    {

        $project = Projek::find($id);
        $other = Projek::where('id', '!=', $id)->get();
        if ($project) {
            return view('detailProject', compact('project', "other"));
        } else {
            abort(404, 'Project Details Not Found');
        }
       
    }
}
