<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_of_the_month extends Model
{
    public function section() {
        return $this->belongsTo(Section::class);
       }

       public function image() {
        return $this->hasOne(Image::class);
       }
}
