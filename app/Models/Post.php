<?php

namespace App\Models;
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