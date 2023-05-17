<?php

namespace App\Http\Controllers;

use App\Models\post;

class PostController extends Controller
{
    public function show(post $post)
    {
        return view('post',compact('post'));
    }
}
