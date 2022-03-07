<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
        $title = 'this is an INDEX page...';
        return view('/pages/index')->with('title', $title);
    }

    public function about(){
        $title = 'about us...';
        return view('/pages/about')->with('title', $title);;
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('/pages/services')->with($data);;
    }
}
