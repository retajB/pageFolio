<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner_title extends Model
{
      public function section() {
        return $this->belongsTo(Section::class);
   }

   public function partners() {
        return $this->hasMany(Partner::class);
   }

   protected $fillable = [
   'section_name',
   'sub_title',
   'section_id'
   ];
}
