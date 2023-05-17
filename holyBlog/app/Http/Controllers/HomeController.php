<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
    {
        $catigories = Category::all();
        $posts = Post::when(request('category_id'), function($query){
            $query->where('category_id',request('category_id'));

        })
        
        -> latest()
        ->get();

        return view( 'index' ,compact('catigories','posts'));

    }
//instade of compact function i can send array of key and values 
//or $posts=Post::orderBy('id' , 'desc'); where for the link like we write
// category_id = category_id and the function request to get the passed id from url
// when() : if we have id from url then ---
}
