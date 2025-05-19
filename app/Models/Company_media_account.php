<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_media_account extends Model
{
    public function section() {
        return $this->belongsTo(Section::class);
       }

       public function social_media_sites(){
            return $this->hasMany(Social_media_site::class);

       }
}
