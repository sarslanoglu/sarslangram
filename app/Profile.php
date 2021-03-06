<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function profileImage()
    {
        $imagePath = ($this->image) ? $this->image : 'profile/6lb91se2IVEHN7cgcm5k1pRo2ny9MWcOwhNin0Ww.png';
        return '/storage/' . $imagePath;
    }
}
