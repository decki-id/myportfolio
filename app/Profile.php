<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function profileImage()
    {
        $dhsImagePath = ($this->image) ? $this->image : '/profile/user.jpg';
        return '/storage/' . $dhsImagePath;
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
