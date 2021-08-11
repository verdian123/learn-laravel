<?php

namespace App\Models;


class Post
{
    static $blog_posts = [
        [
            "title"=> "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author"=> "Verdiansyah",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis laborum sint error porro! Repudiandae nisi quia ipsa sed et non illum obcaecati. Debitis dolore, a ducimus est quas aliquid mollitia."
        ],
        [
            "title"=> "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author"=> "Sandika",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quo, mollitia deserunt laborum ut ratione, aliquam tenetur voluptas aperiam odio quibusdam nam dolorem dolorum? Alias earum officia non laudantium harum eveniet necessitatibus suscipit provident ipsa sed, reprehenderit facere quia ex iste illo porro pariatur veritatis enim. Libero incidunt beatae omnis aperiam ipsam, nihil accusantium non cupiditate asperiores laborum iure maiores eos voluptate aspernatur ullam consequatur ea voluptatibus quaerat! Iste ea vero sint sit soluta natus, sunt dolorem cum vel facilis quas quasi? Doloribus doloremque quam, nemo numquam provident assumenda voluptates? Ipsam neque aut facilis dolores nesciunt maxime sit ab inventore."
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        // cara manual
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        // dengan collection
        return $posts->firstWhere('slug', $slug);
    }
}
