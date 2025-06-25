<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public function feedback_title() {
        return $this->belongsTo(Feedback_title::class);
   }
   
     public function image() {
    return $this->belongsTo(Image::class);
}

   
}
