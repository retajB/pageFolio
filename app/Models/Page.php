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
       'company_id'
    ];

}
