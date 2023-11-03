<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog 
{
    private static $blog_posts = [
        [
            "title" => "judul Post Pertama",
             "slug" => "judul post pertama",
             "author" => "Irfan Adi",
             "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem atque officiis necessitatibus praesentium itaque quos eos illum ea voluptate sapiente dolore molestias exercitationem distinctio sed alias voluptatum, animi modi nihil nisi fugit? Odio ex corporis possimus nihil aspernatur deserunt vero animi voluptatum. Ratione, libero tenetur! Ullam itaque reiciendis amet architecto quibusdam optio voluptatum quo laudantium illo nihil distinctio commodi ipsum modi, ab corrupti pariatur, inventore eaque magnam minus perferendis iusto repudiandae odio nemo! Doloremque, magnam eaque! Similique maiores facere quae sapiente nemo, illum nobis ratione, veniam reiciendis voluptas odio hic? Cumque magni debitis nesciunt omnis totam enim saepe commodi quisquam?"
         ],
         [
             "title" => "judul Post kedua",
             "slug" => "judul post kedua",
             "author" => "Hekel",
             "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quidem atque officiis necessitatibus praesentium itaque quos eos illum ea voluptate sapiente dolore molestias exercitationem distinctio sed alias voluptatum, animi modi nihil nisi fugit? Odio ex corporis possimus nihil aspernatur deserunt vero animi voluptatum. Ratione, libero tenetur! Ullam itaque reiciendis amet architecto quibusdam optio voluptatum quo laudantium illo nihil distinctio commodi ipsum modi, ab corrupti pariatur, inventore eaque magnam minus perferendis iusto repudiandae odio nemo! Doloremque, magnam eaque! Similique maiores facere quae sapiente nemo, illum nobis ratione, veniam reiciendis voluptas odio hic? Cumque magni debitis nesciunt omnis totam enim saepe commodi quisquam."
         ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function getBySlack($slack)
    {
        foreach (self::$blog_posts as $post) {
            if ($post['slug'] === $slack) {
                return $post;
            }
        }
        return null; // Return null jika tidak ditemukan
    }

}
