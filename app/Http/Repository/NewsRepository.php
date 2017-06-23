<?php

namespace App\Http\Repository;

use App\News;
use Cache;

class NewsRepository
{

    public function all()
    {
        return Cache::remember('news', 10, function () {
            return News::orderBy('created_at', 'desc')->limit(15)->get();
        });
    }

    public function show($slug)
    {
        return collect($this->all())->where('slug', '=', $slug)->first();
    }

}