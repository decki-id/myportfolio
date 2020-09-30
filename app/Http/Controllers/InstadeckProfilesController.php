<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
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
        return view('/myportfolio/instadeck/profile', compact('user'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('myportfolio/instadeck/edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);

        $dhsData = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => 'image',
        ]);
        
        if (request('image')) {
            $dhsImagePath = request('image')->store('profile', 'public');
            $dhsImage = Image::make(public_path("storage/{$dhsImagePath}"));
            $dhsImage->save();

            auth()->user()->profile()->update(array_merge(
                $dhsData,
                ['image' => $dhsImagePath]
            ));
        } else {
            auth()->user()->profile()->update($dhsData);
        }

        return redirect("/myportfolio/instadeck/profile/{$user->id}");
    }
}