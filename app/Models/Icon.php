<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    public function objective() {
        return $this->belongsTo(Objective::class);
   }

   public function social_media_site() {
    return $this->belongsTo(Social_media_site::class);
   }

   protected $fillable = [
        'icon_name',
        'icon_url',
    ];

}
