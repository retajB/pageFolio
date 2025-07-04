<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee_of_the_month extends Model
{
    public function eotm_title() {
        return $this->belongsTo(Eotm_title::class);
       }

        public function image() {
    return $this->belongsTo(Image::class);
}

       protected $fillable = [
       'employee_name',
       'content' ,
       'image_id',
       'eotm_title_id'
    ];
}
