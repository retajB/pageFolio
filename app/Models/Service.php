<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function service_title() {
        return $this->belongsTo(Service_title::class);
   }

  public function image() {
    return $this->belongsTo(Image::class);
}

protected $fillable = [
        'content',
        'image_id',
        'service_title_id'
    ];

}
 