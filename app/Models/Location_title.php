<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location_title extends Model
{
    public function section() {
        return $this->belongsTo(Section::class);
   }

   public function locations() {
        return $this->hasMany(Location::class);
   }
protected $fillable = [
   'name',
   'section_id'
   ];

}
