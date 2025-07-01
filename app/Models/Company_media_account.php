<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company_media_account extends Model
{
     public function section() {
    return $this->belongsTo(Section::class);
   }

    //    public function social_media_sites(){
    //         return $this->hasMany(Social_media_site::class);

    //    }

     public function icons() {
        return $this->belongsTo(Icon::class);
    }

       protected $fillable = [
   'username_account',
//    'media_title_id',
//    'social_media_site_id',
   'icon_id',
   'section_id'
   ];
}
