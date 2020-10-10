<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class InstadeckFollowsController extends Controller
{
    public function store(User $user)
    {
        return $user->username;
    }
}