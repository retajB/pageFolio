<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Icon extends Model
{
    public function objective() {
        return $this->belongsTo(Objective::class);
   }

    public function company_media_account(){
            return $this->belongsTo(Company_media_account::class);
    }

   protected $fillable = [
        'icon_name',
        'icon_url',
    ];

}
