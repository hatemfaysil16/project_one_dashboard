<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $name = 'index';
        return view('pages.index')->with('name',$name);
    }

    public function about(){
        $name = 'about';
        return view('pages.about')->with('name',$name);
    }

    public function proLanguage(){
        $myname = array('j'=>'java','c'=>'c++','p'=>'php');
        return view('pages.proLanguage')->with('myname',$myname);
    }
}