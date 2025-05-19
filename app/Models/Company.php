<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    public function user() {
        return $this->hasOne(User::class);
   }

   public function pages() {
    return $this->hasMany(Page::class);
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
