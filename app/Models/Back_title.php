<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Back_title extends Model
{
    public function background() {
        return $this->hasOne(Background::class);
   }

   public function section() {
    return $this->belongsTo(Section::class);
   }
   
}
