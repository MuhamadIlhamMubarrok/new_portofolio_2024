<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Client;
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
    public function OurClient()
    {   
       $clients = Client::all();
        return view('ourclients', compact('clients'));
    }


}
