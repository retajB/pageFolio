<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
   public function image() {
    return $this->belongsTo(Image::class);
}

   public function back_title() {
    return $this->belongsTo(Back_title::class);
   }

 protected $fillable = [
        'content',
        'image_id',
        'back_title_id'
    ];
}
