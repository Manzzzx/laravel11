<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' => 'judul-artikel-1',
                'title' => 'Judul Artikel 1',
                'author' => 'Firmansyah',
                'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non fuga, debitis numquam esse nihil temporibus harum aliquam expedita delectus illum?'
            ],
            [
                'id' => '2',
                'slug' => 'judul-artikel-2',
                'title' => 'Judul Artikel 2',
                'author' => 'Firmansyah',
                'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit voluptatibus laboriosam hic, autem aperiam assumenda?'
            ]
            ];
    }
}

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/about', function () {
    return view('about', ['name' => 'Firmansyah', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts'=> Post::all()]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => '1',
            'slug'=> 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Firmansyah',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non fuga, debitis numquam esse nihil temporibus harum aliquam expedita delectus illum?'
        ],
        [
            'id' => '2',
            'slug'=> 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Firmansyah',
            'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit voluptatibus laboriosam hic, autem aperiam assumenda?'
        ]
        ];

        $post = Arr::first($posts, function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        
        return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title'=> 'Contact']);
});