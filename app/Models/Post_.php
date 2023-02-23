<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Post 1",
            "slug" => "post-1",
            "author" => "Muhammad Diki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti natus sapiente vero recusandae, architecto officia id harum mollitia sit explicabo voluptas, quibusdam porro temporibus similique asperiores. Nemo, praesentium cupiditate odio similique laudantium pariatur temporibus mollitia placeat rem distinctio maiores in id. Laudantium hic illum consequatur nemo architecto voluptatibus provident assumenda, labore atque eveniet, expedita voluptate ipsa sit velit impedit alias ex officia earum culpa, enim cupiditate. At pariatur culpa, quibusdam eum quos unde fugiat obcaecati.
            "
        ],
        [
            "title" => "Post 2",
            "slug" => "post-2",
            "author" => "Hendriyanto",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro minima cum rerum explicabo nam nobis tempore minus magni ea reiciendis accusamus, ipsa nisi obcaecati? Cumque, in tenetur! Fuga maiores veritatis officiis praesentium quam. Cum assumenda ad ducimus saepe necessitatibus vel neque, explicabo, vitae quod illum placeat quos? Blanditiis quia veritatis eos officia laboriosam nisi dicta cupiditate. Odit, officiis officia. Facere vero consequatur nobis ipsum velit repellat omnis architecto quibusdam dolorem ad, officia porro. Natus dicta laudantium ipsum odit assumenda impedit esse, quod reiciendis illum qui, doloribus sed nulla maiores earum ullam! Quibusdam quos assumenda quas asperiores iusto! Beatae, ex qui.
            "
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();

        // $post = [];
        // foreach($posts as $p){
        //     if($p['slug'] === $slug){
        //         $post=$p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
