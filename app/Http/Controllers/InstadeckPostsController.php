<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\Post;

class InstadeckPostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create()
    {
        return view('/myportfolio/instadeck/create');
    }

    public function store()
    {
        $dhsData = request()->validate([
            'image' => 'required|image',
            'caption' => 'required',
        ]);

        $dhsImagePath = request('image')->store('uploads', 'public');

        $dhsImage = Image::make(public_path("storage/{$dhsImagePath}"))->fit(1200, 1200);
        $dhsImage->save();
        
        auth()->user()->posts()->create([
            'image' => $dhsImagePath,
            'caption' => $dhsData['caption'],
        ]);

        return redirect('/myportfolio/instadeck/profile/' . auth()->user()->id);
    }

    public function show(Post $post)
    {
        return view('/myportfolio/instadeck/show', compact('post'));
    }
}
