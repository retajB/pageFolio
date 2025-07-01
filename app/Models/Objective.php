<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Objective extends Model
{
    public function objective_title() {
        return $this->belongsTo(Objective_title::class);
   }

   public function icon() {
    return $this->belongsTo(Icon::class);
}
protected $fillable = [
        'content',
        'objective_title_id',
        'icon_id'
    ];
}
