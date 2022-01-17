<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller {
    public function index() {
        return view('index');
    }
    
    public function about() {
        return view('about');
    }
    
    public function certificates() {
        return view('certificates');
    }
    
    public function portfolios() {
        return view('portfolios');
    }
    
    public function blogs() {
        return view('blogs');
    }

    public function welcome() {
        return view('welcome');
    }
}