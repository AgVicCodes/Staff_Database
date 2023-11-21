<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {return view("index");}

    public function blog() {return view("blog");}

    public function blogs() {return view("blogs");}

    public function staff() {return view("staff");}

    public function about() {return view("about");}

    public function location() {return view("location");}


}