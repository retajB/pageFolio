<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service_title extends Model
{
      public function section() {
        return $this->belongsTo(Section::class);
   }

   public function services() {
        return $this->hasMany(Service::class);
   }

   protected $fillable = [
   'section_name',
   'section_id'
   ];
}
