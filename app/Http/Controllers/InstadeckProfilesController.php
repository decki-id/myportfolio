<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InstadeckProfilesController extends Controller
{
    public function index(User $user)
    {
        // WITHOUT \App\User
        // $user = User::findOrFail($user);
        // return view('/myportfolio/instadeck/index', [
        //     'user' => $user,
        // ]);
        return view('/myportfolio/instadeck/index', compact('user'));
    }

    public function edit(User $user)
    {
        return view('myportfolio/instadeck/edit', compact('user'));
    }
}
