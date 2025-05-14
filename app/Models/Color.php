<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function company() {
        return $this->belongsTo(Company::class);
       }

        protected $fillable = [
        'theme_color1',
        'theme_color2',
        'text_color',
        'company_id'
    ];
}
