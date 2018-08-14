<?php

$router->get('', 'PagesController@home');
$router->get('about-us', 'PagesController@aboutUs');

$router->get('admin/login', "Authenticate@login");
$router->get('admin/signup', "Authenticate@signup");
$router->post('admin/createuser', "Authenticate@createuser");
$router->post('admin/validate', "Authenticate@validate");
$router->get('admin/logout', "Authenticate@logout", true);


$router->get('admin', "BlogController@index", true);

$router->get('admin/blog/create', "BlogController@create", true);
$router->post('admin/blog/create', "BlogController@storeBlogPost", true);
$router->get('admin/blog', "BlogController@allPosts", true);
$router->get('admin/blog/show/{id}', "BlogController@singlePost");
$router->get('admin/blog/category', "BlogController@category", true);
$router->post('admin/blog/category', "BlogController@storeCategory", true);




