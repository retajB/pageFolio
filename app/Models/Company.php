<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user() {
        return $this->hasOne(User::class);
   }

   public function section() {
    return $this->hasOne(Section::class);
}

public function color() {
    return $this->hasOne(Color::class);
   }

    protected $fillable = [
        'name', 
        'domain', 
        'slogan',
        'logo_url',
        'email',
        'phone_number'
    
    
    ];
}
