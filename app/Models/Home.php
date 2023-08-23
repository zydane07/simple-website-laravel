<?php

namespace App\Models;


class Home
{
    static   $blog_posts = [
        [
            'id' => '1',
            'judul' => 'Membaca Menyenangkan',
            'penulis' => 'Muhammad Zydane',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi nobis dicta delectus aspernatur sit dolorum a atque impedit ipsum voluptas placeat aperiam accusamus, ipsa architecto consectetur, provident pariatur magni deleniti?
            Quaerat inventore voluptatem consectetur impedit distinctio blanditiis asperiores vel veritatis. Nesciunt minima ipsum, at iste fugit enim, distinctio harum, facere quasi pariatur in quaerat officiis totam voluptate facilis praesentium a.
            Repellat illo officiis laborum odit. Numquam rem consectetur ipsum, itaque impedit deleniti deserunt. Porro dolores alias cumque, ducimus libero id. Eum, quas itaque corporis consequuntur magni animi excepturi accusantium. Adipisci?
            Impedit rerum unde explicabo eius numquam voluptas doloremque totam ab modi. Laborum veniam asperiores ipsa minus assumenda, sunt autem quidem facere perspiciatis enim tempore deleniti commodi sequi hic explicabo consequuntur.
            Sequi dolores modi corrupti, aliquid eaque ratione temporibus iure iusto quasi ipsam nulla est repudiandae, fugiat recusandae necessitatibus? Nobis dignissimos beatae architecto molestias incidunt ratione. In labore voluptates vero consequuntur!'
        ],
        [
            'id' => '2',
            'judul' => 'Makan Enak',
            'penulis' => 'Muhammad Zydane Ulir Rizqi Toyyibi',
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi nobis dicta delectus aspernatur sit dolorum a atque impedit ipsum voluptas placeat aperiam accusamus, ipsa architecto consectetur, provident pariatur magni deleniti?
            Quaerat inventore voluptatem consectetur impedit distinctio blanditiis asperiores vel veritatis. Nesciunt minima ipsum, at iste fugit enim, distinctio harum, facere quasi pariatur in quaerat officiis totam voluptate facilis praesentium a.
            Repellat illo officiis laborum odit. Numquam rem consectetur ipsum, itaque impedit deleniti deserunt. Porro dolores alias cumque, ducimus libero id. Eum, quas itaque corporis consequuntur magni animi excepturi accusantium. Adipisci?
            Impedit rerum unde explicabo eius numquam voluptas doloremque totam ab modi. Laborum veniam asperiores ipsa minus assumenda, sunt autem quidem facere perspiciatis enim tempore deleniti commodi sequi hic explicabo consequuntur.
            Sequi dolores modi corrupti, aliquid eaque ratione temporibus iure iusto quasi ipsam nulla est repudiandae, fugiat recusandae necessitatibus? Nobis dignissimos beatae architecto molestias incidunt ratione. In labore voluptates vero consequuntur!'
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($id)
    {
        $posts = static::all();
        // $new_post = [];
        // foreach ($posts as $p) {
        //     if ($p["id"] === $id) {
        //         $new_post = $p;
        //     }
        // }

        // return $new_post;
        return $posts->firstWhere('id', $id);
    }
}
