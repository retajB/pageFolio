<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function partner_title() {
        return $this->belongsTo(Partner_title::class);
   }

  public function image() {
    return $this->belongsTo(Image::class);
}


protected $fillable = [
     
       'image_id',
       'partner_title_id' ,
    ];
}
