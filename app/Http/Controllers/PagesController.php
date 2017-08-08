<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        //return view('pages.index', compact('title'));
        return view('pages.home')->with('title', $title);
    }

    public function about(){
        $title = 'About';
        return view('pages.about')->with('title', $title);
    }

    public function browse(){
        $title = 'Browse';
        return view('pages.browse')->with('title', $title);
    }
    public function upload(){
        $title = 'Upload';
        return view('pages.upload')->with('title', $title);
    }   
}
