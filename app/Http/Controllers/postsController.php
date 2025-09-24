<?php

namespace App\Http\Controllers;

use App\Models\Post;

class postsController extends Controller
{
    public function tampil()
    {
        $post = Post::all();
        return view('halaman_post2', compact('post'));
    }
}
