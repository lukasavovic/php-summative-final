<?php

$router->get('', 'PagesController@home');
$router->get('about-us', 'PagesController@aboutUs');
$router->get('contact', 'PagesController@contact');
$router->get('products', 'PagesController@products');

$router->get('admin/login', "Authenticate@login");
$router->get('admin/signup', "Authenticate@signup");
$router->post('admin/createuser', "Authenticate@createuser");
$router->post('admin/validate', "Authenticate@validate");
$router->get('admin/logout', "Authenticate@logout", true);


$router->get('admin', "ProductsController@index", true);

$router->get('admin/blog/create', "BlogController@create", true);
$router->post('admin/blog/create', "BlogController@storeBlogPost", true);
$router->get('admin/blog', "BlogController@allPosts", true);
$router->get('admin/blog/show/{id}', "BlogController@singlePost", true);



