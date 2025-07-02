<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function company(){
      return $this->belongsTo(Company::class);

    }

    public function sections(){
      return $this->hasMany(Section::class);

    }

    protected $fillable = [
       'page_name',
       'layout',
       'theme_color1' ,
       'theme_color2',
       'text_color',
       'text_color2',
       'company_id'
    ];

}
