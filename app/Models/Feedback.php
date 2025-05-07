<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public function section() {
        return $this->belongsTo(Section::class);
   }
}
