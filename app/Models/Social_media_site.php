<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social_media_site extends Model
{
    public function section() {
        return $this->belongsTo(Section::class);
       }

       public function icon() {
        return $this->hasMany(Icon::class);
       }
}
