<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_media_account extends Model
{
     public function section() {
    return $this->belongsTo(Section::class);
   }


     public function icon() {
        return $this->hasOne(Icon::class);
    }

       protected $fillable = [
   'username_account',
   'section_id'
   ];
}
