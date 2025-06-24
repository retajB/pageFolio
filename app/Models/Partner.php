<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function partner_title() {
        return $this->belongsTo(Partner_title::class);
   }

   public function image() {
    return $this->hasOne(Image::class);
} 

protected $fillable = [
       'content',
       'image_id',
       'partner_title_id' ,
    ];
}
