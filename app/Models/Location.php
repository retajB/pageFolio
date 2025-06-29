<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    public function location_title() {
        return $this->belongsTo(Location_title::class);
   }

       public function image() {
    return $this->belongsTo(Image::class);
}
    protected $fillable = [
         'location_url',
         'city_name',
         'content',
         'image_id',
         'location_title_id'
    ];

}
