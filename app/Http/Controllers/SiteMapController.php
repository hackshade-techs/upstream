<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

class SiteMapController extends Controller
{
	public function index()
	{
		// create new sitemap object
	    $sitemap = App::make("sitemap");

	    // add items to the sitemap (url, date, priority, freq)
	    $sitemap->add(URL::to('/'), '2018-08-25T20:10:00+02:00', '1.0', 'daily');
	    $sitemap->add(URL::to('about'), '2018-08-26T12:30:00+02:00', '0.9', 'monthly');
	    $sitemap->add(URL::to('services'), '2018-08-26T12:30:00+02:00', '0.9', 'monthly');
	    $sitemap->add(URL::to('road-transport'), '2018-08-26T12:30:00+02:00', '0.9', 'monthly');
	    $sitemap->add(URL::to('air-freight'), '2018-08-26T12:30:00+02:00', '0.9', 'monthly');
	    $sitemap->add(URL::to('shipping'), '2018-08-26T12:30:00+02:00', '0.9', 'monthly');
	    $sitemap->add(URL::to('packaging-distribution'), '2018-08-26T12:30:00+02:00', '0.9', 'monthly');
	    $sitemap->add(URL::to('storage'), '2018-08-26T12:30:00+02:00', '0.9', 'monthly');

	    $sitemap->add(URL::to('news'), '2018-08-26T12:30:00+02:00', '0.9', 'monthly');

	    // get all posts from db
	    $articles = DB::table('articles')->orderBy('created_at', 'desc')->get();

	    // add every post to the sitemap
	    foreach ($articles as $article)
	    {
	        $sitemap->add($article->slug, $article->updated_at, '0.9', 'monthly');
	    }

	    // generate your sitemap (format, filename)
	    $sitemap->store('xml', 'mysitemap');
	    // this will generate file mysitemap.xml to your public folder
	}

}
