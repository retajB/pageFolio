<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
   public function image() {
    return $this->hasOne(Image::class);
}

   public function back_title() {
    return $this->hasOne(Back_title::class);
   }

 protected $fillable = [
        'content',
        'back_title_id'
    ];
}
