<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use Illuminate\Http\Request;
use Backpack\PageManager\app\Models\Page;

class PageController extends Controller
{
    public function welcome()
    {
        $testmonials = Testmonial::all();
        return view('welcome', compact(['testmonials']));
    }

	public function index($slug)
    {
        $page = Page::findBySlug($slug);

        if (!$page)
        {
            abort(404, 'Please go back to our <a href="'.url('').'">homepage</a>.');
        }

        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        return view('pages.'.$page->template, $this->data);
    }
}
