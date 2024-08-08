<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Count;
use App\Models\Message;
use App\Models\Projek;
use App\Models\Testimony;
use Illuminate\Http\Request;

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

    public function submitContactForm(Request $request)
{
    $request->validate([
        'first_name' => 'required|string|max:255',
        'last_name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ]);

    // Assuming you have a Contact model to save the contact details
    Message::create([
        'firstName' => $request->first_name,
        'lastName' => $request->last_name,
        'email' => $request->email,
        'message' => $request->message,
    ]);

    return redirect()->route('home.contactus')->with('success', 'Your message has been sent successfully!');
}

    public function DetailHome(string $id)
    {
        $project = Projek::with('subGambarProjects')->find($id);
        // Check if project details are found
        if ($project) {
            // Return a view with project details and related sub-images
            return view('detailProduct', compact('project'));
        } else {
            // If no project details found, return a 404 response
            abort(404, 'Project details not found');
        }
    }

    public function OurClient()
    {
        $clients = Client::all();
        return view('ourclients', compact('clients'));
    }
    public function LandingPage()
    {
        $banner = Banner::where('id', '8751d04d-c20d-442d-ade5-238d5d6ab024')->first();
        $counts = Count::all();
        $testimony = Testimony::all();
        $project = Projek::all();
        return view('landingpage', compact('banner', 'counts', 'testimony', 'project'));
    }
}
    
