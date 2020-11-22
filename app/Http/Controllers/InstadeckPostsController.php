<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use App\Models\InstadeckPost;

class InstadeckPostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('instadeck.auth');
    }

    public function index()
    {
        $users = auth()->user()->following()->pluck('instadeck_profiles.user_id');

        // $posts = InstadeckPost::whereIn('user_id', $users)->with('user')->orderBy('created_at', 'DESC')->paginate(5);
        $posts = InstadeckPost::whereIn('user_id', $users)->with('user')->orderBy('created_at', 'DESC')->get();

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

        return redirect('/instadeck/profile/' . auth()->user()->username);
    }

    public function show(InstadeckPost $post)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($post->user->id) : false;

        return view('/instadeck/show', compact('post', 'follows'));
    }

    public function explore()
    {
        $posts = InstadeckPost::all();

        $client = new Client();

        $response = $client->request('GET', "https://api.unsplash.com/photos/random/?count=30&client_id=0sYAE26S0cpbfLbSE5EaVuA6cpE91GOpU1OhlQ1IKDs");

        $content = $response->getBody()->getContents();

        $unsplashApi = json_decode($content, true);

        dd(unsplashApi);

        return view('/instadeck/explore', compact('posts', 'unsplashApi'));
    }
}