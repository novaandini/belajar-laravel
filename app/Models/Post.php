<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

class Post
{
    public static function all()
    {
        return
            [
                [
                    'title' => 'Judul Artikel',
                    'penulis' => 'Nova Andini',
                    'konten' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus ex officia officiis nisi reiciendis mollitia eveniet placeat, ipsa rem error voluptas enim pariatur repellendus animi incidunt magnam saepe deleniti ullam?',
                ],
                [
                    'title' => 'Article #2',
                    'penulis' => 'Nova Andini',
                    'konten' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eum fugit inventore sapiente eos sequi quae quam et illum at sit repudiandae enim, distinctio velit alias ad culpa? Sequi, libero doloribus!'
                ]
            ];
    }

    public static function find($slug): array
    {

        $post = Arr::first(static::all(), fn ($post) => Str::slug($post['title'], '-') == $slug);

        // if (!$post) {
        //     abort(404);
        // }

        return $post;
    }
}
