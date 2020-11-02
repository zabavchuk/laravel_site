<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage(){

        $imagePath = $this->image ? $this->image : 'profile/480px-No_image_available.svg.png';
        return $imagePath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
