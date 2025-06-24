<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback_title extends Model
{
    public function feedbacks() {
        return $this->hasMany(Feedback::class);
   }

   public function section() {
    return $this->belongsTo(Section::class);
   }

   protected $fillable = [
   'section_name',
   'section_id'
   ];
}
