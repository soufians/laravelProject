<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
class PagesController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at','desc')->paginate(3); // desc/asc title created_at
        // $posts = Post::all();
        // return $posts;

        return view('pages.index')->with('posts',$posts);
    }
    public function about() {
        $title = 'welcome in about';
        return view('pages.about')->with('title',$title);
    }
    public function services() {
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design','Programing','SEO'],
        );
        return view('pages.services')->with($data);
    }
}
