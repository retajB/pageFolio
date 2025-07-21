<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    public function service_title() {
        return $this->belongsTo(Service_title::class);
   }

  public function image() {
    return $this->hasOne(Image::class);
}

protected $fillable = [
        'content',
        'service_title_id'
    ];

}
 