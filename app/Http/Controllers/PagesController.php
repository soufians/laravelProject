<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index() {
        $title = 'welcome in index';
        $body = 'the body varible';
//        return view('pages.index',compact('title'));// or
        return view('pages.index')->with('title',$title);

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
