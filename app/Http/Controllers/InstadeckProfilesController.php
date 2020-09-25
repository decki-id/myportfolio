<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InstadeckProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findOrFail($user);

        return view('/myportfolio/instadeck/index', [
            'user' => $user,
        ]);
    }
}
