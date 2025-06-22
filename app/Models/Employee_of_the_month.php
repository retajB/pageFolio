<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_of_the_month extends Model
{
    public function eotm_title() {
        return $this->belongsTo(Eotm_title::class);
       }

       public function image() {
        return $this->hasOne(Image::class);
       }
}
