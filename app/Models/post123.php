<?php

namespace App\Models;


class Post 
{
    private static $blog_posts =  [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gavin Diandra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates exercitationem assumenda repellat optio eum debitis voluptas dicta fugit tenetur corporis. Molestiae suscipit, autem illum itaque doloribus officiis accusantium dolorum dolorem, architecto inventore odit ipsam asperiores quos nesciunt quod voluptatum est harum repellat eius aliquam. Ratione et necessitatibus temporibus fuga, consequatur corporis fugiat ad delectus praesentium, earum perferendis! Nemo, temporibus! Amet sapiente itaque alias quis quidem atque magnam, modi odio nisi magni veritatis pariatur neque at tempore perferendis libero quod suscipit."
        ],
        [
            "title" => "Judul posts kedua",
            "slug" => "judul-posts-kedua",
            "author" => "Paquiao",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat cupiditate, vel maxime explicabo in corrupti esse at quasi optio quisquam totam delectus neque recusandae itaque dolorum. Nostrum ipsam expedita architecto obcaecati voluptatem culpa in eum veritatis mollitia totam! Ipsa, omnis perferendis voluptates ad animi nihil cupiditate aliquam, quis id est quo ipsam praesentium labore magnam assumenda totam a hic repellendus odit eveniet? Reiciendis sequi similique nulla quo, eos eligendi quis voluptas amet beatae iusto recusandae nihil mollitia enim repellat fugit facilis non velit consectetur laboriosam consequatur. Officiis, veniam! Harum fuga vero id nemo, dolorem cumque a dolores explicabo dolorum odio."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
    return $posts->firstWhere('slug', $slug);
    }
}
