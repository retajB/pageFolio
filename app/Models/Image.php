<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function background() {
        return $this->belongsTo(Background::class);
   }

   public function service() {
    return $this->belongsTo(Service::class);
   }

   public function partner() {
    return $this->belongsTo(Partner::class);
   }

   public function employee_of_the_month() {
    return $this->belongsTo(Employee_of_the_month::class);
   }

   public function location() {
    return $this->belongsTo(Location::class);
   }

    protected $fillable = [
        'image_name',
        'image_url',
        'service_id',
        'background_id',
        'partner_id',
        'employee_of_the_month_id',
        'location_id'
    ];
}
