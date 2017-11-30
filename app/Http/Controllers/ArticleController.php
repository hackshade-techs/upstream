<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(Request $request)
    {
        $search_term = $request->input('q');
        $page = $request->input('page');

        if ($search_term) {
            $results = Article::where('title', 'LIKE', '%'.$search_term.'%')->paginate(10);
        } else {
            $results = Article::paginate(10);
        }

        return view('pages.news', compact('results'));
    }

    public function show($slug)
    {
        $result = Article::where('slug' ,$slug)->first();
        return view('pages.single-news', compact('result'));
    }

    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $results = Article::where('category_id',$category->id)->paginate(10);
        return view('pages.news', compact('results'));
    }
}
