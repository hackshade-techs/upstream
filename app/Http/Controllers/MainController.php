<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Testmonial;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //about us page
    public function aboutus()
    {
        $testmonials = Testmonial::all();
    	return view('pages.about-us', compact('testmonials'));
    }
    //contact us
    public function contact()
    {
    	return view('pages.contact');
    }
    //news page
    public function news()
    {
    	return view('pages.news');
    }
    //about us page
    public function services()
    {
    	return view('pages.services');
    }
    //network page
    public function branches()
    {
    	return view('pages.branches');
    }
    //quotes page
    public function quote()
    {
    	return view('pages.quote');
    }
    //roadtransport page page
    public function roadTransport()
    {
        return view('pages.roadtransport');
    }

     //air freight page page
    public function airFreight()
    {
        return view('pages.airfreight');
    }

     //storage page
    public function storage()
    {
        return view('pages.storage');
    }

     //shipping page
    public function shipping()
    {
        return view('pages.shipping');
    }

     //packaging page
    public function packaging()
    {
        return view('pages.packages');
    }

}
