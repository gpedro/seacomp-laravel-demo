<?php

namespace App\Http\Controllers;

use App\Http\Repository\NewsRepository;

class NewsController extends Controller
{
    public function index(NewsRepository $repository)
    {
        $news = $repository->all();
        return view('news.index', compact('news'));
    }

    public function show($slug, NewsRepository $repository)
    {
        $news = $repository->show($slug);
        if (!$news) {
            return redirect()->route('news.index');
        }

        return view('news.show', compact('news'));
    }
}
