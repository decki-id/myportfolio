<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InstadeckProfile extends Model
{
    protected $guarded = [];

    protected $keyType = 'string';

    public $incrementing = false;

    public function profileImage()
    {
        $dhsImagePath = ($this->image) ? $this->image : '/profile/user.jpg';
        return '/storage/' . $dhsImagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
