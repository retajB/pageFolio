<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Media_title extends Model
{
     public function section() {
        return $this->belongsTo(Section::class);
       }

         public function company_media_account(){
            return $this->hasMany(Company_media_account::class);

       }

    }
