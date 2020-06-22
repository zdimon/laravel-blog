<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;


class FilterController extends Controller
{
    public function index($id)
    {
        $posts = Post::where('category_id', $id)->get();
        return view('index')->with('posts', $posts);

    }    
}
