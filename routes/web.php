<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "name" => "Muhammad Verdiansyah",
        "email" => "verdiansyah1404@gmail.com",
        "image" => "phone.png"
    ]);
});

Route::get('/', function () {
    return view('home',[
        "title" => "home"
    ]);
});



Route::get('/blog', function () {
    $blog_post =[
        [
            "title"=> "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author"=> "Verdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis laborum sint error porro! Repudiandae nisi quia ipsa sed et non illum obcaecati. Debitis dolore, a ducimus est quas aliquid mollitia."
        ],
        [
            "title"=> "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author"=> "Doddy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quo, mollitia deserunt laborum ut ratione, aliquam tenetur voluptas aperiam odio quibusdam nam dolorem dolorum? Alias earum officia non laudantium harum eveniet necessitatibus suscipit provident ipsa sed, reprehenderit facere quia ex iste illo porro pariatur veritatis enim. Libero incidunt beatae omnis aperiam ipsam, nihil accusantium non cupiditate asperiores laborum iure maiores eos voluptate aspernatur ullam consequatur ea voluptatibus quaerat! Iste ea vero sint sit soluta natus, sunt dolorem cum vel facilis quas quasi? Doloribus doloremque quam, nemo numquam provident assumenda voluptates? Ipsam neque aut facilis dolores nesciunt maxime sit ab inventore."
        ]
    ];
    return view('posts',[
        "title" => "posts",
        "posts" => $blog_post
    ]);
});

route::get('posts/{slug}', function($slug){
    $blog_post =[
        [
            "title"=> "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author"=> "Verdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis laborum sint error porro! Repudiandae nisi quia ipsa sed et non illum obcaecati. Debitis dolore, a ducimus est quas aliquid mollitia."
        ],
        [
            "title"=> "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author"=> "Doddy",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quo, mollitia deserunt laborum ut ratione, aliquam tenetur voluptas aperiam odio quibusdam nam dolorem dolorum? Alias earum officia non laudantium harum eveniet necessitatibus suscipit provident ipsa sed, reprehenderit facere quia ex iste illo porro pariatur veritatis enim. Libero incidunt beatae omnis aperiam ipsam, nihil accusantium non cupiditate asperiores laborum iure maiores eos voluptate aspernatur ullam consequatur ea voluptatibus quaerat! Iste ea vero sint sit soluta natus, sunt dolorem cum vel facilis quas quasi? Doloribus doloremque quam, nemo numquam provident assumenda voluptates? Ipsam neque aut facilis dolores nesciunt maxime sit ab inventore."
        ]
    ];

    $new_post = [];
    foreach($blog_post as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
