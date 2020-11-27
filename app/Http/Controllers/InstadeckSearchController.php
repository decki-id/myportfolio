<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InstadeckPost;
use App\Models\User;
use App\Models\InstadeckProfile;

class InstadeckSearchController extends Controller
{
    public function index()
    {
        $posts = InstadeckPost::all();

        return view('/instadeck/explore', compact('posts'));
    }

    public function search(Request $request)
    {
        $search = $request->search;

        $data = User::where('username', 'like', "%{$search}%")
                    ->orwhere('fullname', 'like', "%{$search}%")
                    ->with('profile')->get();

        $user = json_decode($data);

        return view('/instadeck/explore', compact('user'));
    }
}