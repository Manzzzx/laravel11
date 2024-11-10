<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Firmansyah', 'title' => 'About']);
});

Route::get('/blog', function () {
    return view('blog', ['title' => 'Blog', 'posts'=> [
        [
            'title' => 'Judul Artikel 1',
            'author' => 'Firmansyah',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non fuga, debitis numquam esse nihil temporibus harum aliquam expedita delectus illum?'
        ],
        [
            'title' => 'Judul Artikel 2',
            'author' => 'Firmansyah',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit voluptatibus laboriosam hic, autem aperiam assumenda?'
        ]
    ]]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});