<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => 'Home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => 'About',
        "nama" => 'Eradika Reza',
        "email" => 'rezadika11@gmail.com',
        "image" => "eradika.jpg"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eradika Reza",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, 
            eos explicabo itaque reiciendis voluptates eaque consequatur cumque sed fugiat 
            odio harum inventore facere accusantium tenetur quis distinctio, quae assumenda 
            sit cupiditate. Praesentium natus ad nesciunt voluptatibus cum incidunt? Eum nemo 
            molestias ipsum delectus numquam cumque, odit dolorum nisi deserunt voluptas 
            provident distinctio quasi magnam cupiditate! Quidem repellat suscipit, saepe
             veritatis distinctio dolores voluptas quae harum labore quis deleniti doloribus 
             incidunt minus. Aut perferendis excepturi harum quisquam neque iusto fugit non?
            "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mohammad Salah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, 
              eos explicabo itaque reiciendis voluptates eaque consequatur cumque sed fugiat 
                 odio harum inventore facere accusantium tenetur quis distinctio, quae assumenda 
            sit cupiditate. Praesentium natus ad nesciunt voluptatibus cum incidunt? Eum nemo 
            molestias ipsum delectus numquam cumque, odit dolorum nisi deserunt voluptas 
            provident distinctio quasi magnam cupiditate! Quidem repellat suscipit, saepe
             veritatis distinctio dolores voluptas quae harum labore quis deleniti doloribus 
             incidunt minus. Aut perferendis excepturi harum quisquam neque iusto fugit non?
            "
        ]
    ];

    return view('posts', [
        "title" => 'Posts',
        "posts" => $blog_posts
    ]);
});

Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Eradika Reza",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, 
            eos explicabo itaque reiciendis voluptates eaque consequatur cumque sed fugiat 
            odio harum inventore facere accusantium tenetur quis distinctio, quae assumenda 
            sit cupiditate. Praesentium natus ad nesciunt voluptatibus cum incidunt? Eum nemo 
            molestias ipsum delectus numquam cumque, odit dolorum nisi deserunt voluptas 
            provident distinctio quasi magnam cupiditate! Quidem repellat suscipit, saepe
             veritatis distinctio dolores voluptas quae harum labore quis deleniti doloribus 
             incidunt minus. Aut perferendis excepturi harum quisquam neque iusto fugit non?
            "
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Mohammad Salah",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Expedita, 
              eos explicabo itaque reiciendis voluptates eaque consequatur cumque sed fugiat 
                 odio harum inventore facere accusantium tenetur quis distinctio, quae assumenda 
            sit cupiditate. Praesentium natus ad nesciunt voluptatibus cum incidunt? Eum nemo 
            molestias ipsum delectus numquam cumque, odit dolorum nisi deserunt voluptas 
            provident distinctio quasi magnam cupiditate! Quidem repellat suscipit, saepe
             veritatis distinctio dolores voluptas quae harum labore quis deleniti doloribus 
             incidunt minus. Aut perferendis excepturi harum quisquam neque iusto fugit non?
            "
        ]
    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "single post",
        "post" => $new_post
    ]);
});


// Route::get('/home', [HomeController::class, 'index']);
