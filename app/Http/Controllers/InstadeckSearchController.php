<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\InstadeckPost;

class InstadeckSearchController extends Controller
{
    public function index(Request $request, $search)
    {
        if ($search->ajax()) {
            $result = User::where(function ($q) use ($search) {
                $q->where('users.username', 'like', "%{$search}%")
                ->orwhere('users.fullname', 'like', "%{$search}%");
            });

            if ($result == 'null') {
                $result = InstadeckPost::where(function ($q) use ($search) {
                    $q->where('instadeck_posts.caption', 'like', "%{$search}%");
                });
            }
        }

        return view('/instadeck/explore', compact('result'))->render();
    }
}