<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Background extends Model
{
    public function image() {
        return $this->hasOne(Image::class);
   }

   public function section() {
    return $this->belongsTo(Section::class);
}
 protected $fillable = [
        'title',
        'content',
        'image_id',
        'section_id'
    ];
}
