<?php

namespace App\Controllers;

use App\Core\App;

class PagesController
{
    public function home()
    {
        $posts = App::get('database')->getAll("posts");
        return view('index', compact('posts'));
    }

    public function aboutUs()
    {
        return view('about');
    }
}