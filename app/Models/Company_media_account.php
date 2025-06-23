<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_media_account extends Model
{
    public function media_title() {
        return $this->belongsTo(Media_title::class);
       }

       public function social_media_sites(){
            return $this->hasMany(Social_media_site::class);

       }
}
