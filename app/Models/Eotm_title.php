<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eotm_title extends Model
{
     public function employee_of_the_months() {
        return $this->hasMany(Employee_of_the_month::class);
   }

   public function section() {
    return $this->belongsTo(Section::class);
   }

    protected $fillable = [
   'name',
   'section_id'
   ];
}
