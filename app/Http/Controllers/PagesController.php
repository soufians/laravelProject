<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;


class PagesController extends Controller
{
    public function index() {
        // $posts = Post::orderBy('created_at','desc')->paginate(5); // desc/asc title created_a, ->paginate(3)
        $posts = Post::all();
        // return($posts );
        return view('pages.index')->with('posts',$posts);
    }
}
