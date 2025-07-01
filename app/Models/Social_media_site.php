<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Social_media_site extends Model
{
public function icons() {
        return $this->belongsTo(Icon::class);
       }

 public function company_media_account(){
            return $this->belongsTo(Company_media_account::class);

       }

      
}

