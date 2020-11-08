<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\InstadeckPost;

class InstadeckPostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('instadeck.auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('instadeck_profiles.user_id');

        // $posts = InstadeckPost::whereIn('user_id', $users)->with('user')->orderBy('created_at', 'DESC')->get();
        $posts = InstadeckPost::whereIn('user_id', $users)->with('user')->orderBy('created_at', 'DESC')->paginate(5);

        return view('/instadeck/index', compact('posts'));
    }
    
    public function create()
    {
        return view('/instadeck/create');
    }

    public function store()
    {
        $dhsData = request()->validate([
            'image' => 'required|image',
            'caption' => 'required',
        ]);

        $dhsImagePath = request('image')->store('uploads', 'public');

        $dhsImage = Image::make(public_path("/storage/{$dhsImagePath}"))->fit(1200, 1200);
        $dhsImage->save();
        
        auth()->user()->posts()->create([
            'image' => $dhsImagePath,
            'caption' => $dhsData['caption'],
        ]);

        return redirect('/instadeck/profile/' . auth()->user()->id);
    }

    public function show(InstadeckPost $post)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($post->user->id) : false;

        return view('/instadeck/show', compact('post', 'follows'));
    }
}
