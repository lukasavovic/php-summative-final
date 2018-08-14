<?php

namespace App\Controllers;

use App\Core\App;

class BlogController
{
    public function index()
    {
        return view('admin');
    }

    public function create()
    {
        $categories = App::get('database')->getAll("categories");
        $users = App::get('database')->getAll("users");

        return view('createBlogPost', compact('categories', 'users'));
    }

    public function storeBlogPost()
    {
        App::get('database')->addNewBlogPost('posts', $_POST);
        return redirect('/admin');
    }

    public function allPosts()
    {
        $posts = App::get('database')->getAll("posts");
        return view('adminBlog', compact('posts'));
    }

    public function singlePost($params)
    {
        $post = App::get('database')->getOne('posts', $params);
        return view('adminSinglePost', compact('post'));
    }

    public function category()
    {
        $categories = App::get('database')->getAll("categories");
        return view('adminCategory', compact('categories'));
    }

    public function storeCategory()
    {
        App::get('database')->addNew('categories', $_POST);
        return redirect('/admin');
    }
}