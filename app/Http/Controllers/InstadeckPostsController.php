<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstadeckPostsController extends Controller
{
    public function create()
    {
        return view('/myportfolio/instadeck/create');
    }

    public function store()
    {
        $data = request()->validate([
            'image' => 'required|image',
            'caption' => 'required',
        ]);

        \App\Post::create($data);
    }
}
