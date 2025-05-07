<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    public function section() {
        return $this->belongsTo(Section::class);
   }

   public function icons() {
    return $this->hasMany(Icon::class);
}
}
