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

    public function store()
    {
        $this->handleUpload();
        App::get('database')->addNew('products', $_POST);
        return redirect('/admin/products');
    }

    public function show()
    {
        $product = App::get('database')->getOne('products', $_GET['id']);
        $categories = App::get('database')->getAll("categories");

        return view('products.show', compact('product', 'categories'));
    }

    public function edit()
    {
        $categories = App::get('database')->getAll("categories");
        $product = App::get('database')->getOne('products', $_GET['id']);
        return view('products.create', compact('product', 'categories'));
    }

    public function update()
    {
        $this->handleUpload();
        App::get('database')->update('products', $_POST);
        return redirect('/admin/products');
    }

    public function destroy()
    {
        App::get('database')->destroy('products', $_POST['id']);
        return redirect('/admin/products');
    }

    private function handleUpload()
    {
        if($_FILES['image']['error'] != 4) {
            $newName = "images/".time()."_".$_FILES['image']['name'];
            $_POST['image'] = $newName;
            move_uploaded_file($_FILES['image']['tmp_name'], getcwd()."/storage/".$newName);
        }
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