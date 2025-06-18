<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    public function objective_title() {
        return $this->belongsTo(Objective_title::class);
   }

   public function icons() {
    return $this->hasMany(Icon::class);
}
}
