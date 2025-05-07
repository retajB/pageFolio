<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function company() {
        return $this->belongsTo(Company::class);
   }

   public function background() {
    return $this->hasOne(Background::class);
   }

    public function services() {
        return $this->hasMany(Service::class);
    } 

    public function objectives() {
        return $this->hasMany(Objective::class);
    }

    public function partners() {
        return $this->hasMany(Partner::class);
    } 

    
    public function employees_of_the_month() { //نحتاج نسأل عنها 
        return $this->hasMany(Employee_of_the_month::class);
    } 

    public function feedbacks() {
        return $this->hasMany(Feedback::class);
    } 

    public function location() {
        return $this->hasOne(Location::class);
       }

}
