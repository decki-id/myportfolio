<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstadeckTelescopeController extends Controller
{
    public function index()
    {
        return view('telescope');
    }
}
