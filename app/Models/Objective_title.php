<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objective_title extends Model
{
     public function section() {
        return $this->belongsTo(Section::class);
   }

   public function objectives() {
        return $this->hasMany(Objective::class);
   }

  protected $fillable = [
   'section_name',
   'section_id'
   ];
}
