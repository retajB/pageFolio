<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function page() {
        return $this->belongsTo(Page::class);
   }

   public function back_title() {
    return $this->hasOne(Back_title::class);
   }

    public function service_title() {
        return $this->hasOne(Service_title::class);
    } 

    public function objective_title() {
        return $this->hasOne(Objective_title::class);
    }

    public function partner_title() {
        return $this->hasOne(Partner_title::class);
    } 

    
    public function eotm_title() { 
        return $this->hasOne(Eotm_title::class);
    } 

    public function feedback_title() {
        return $this->hasOne(Feedback_title::class);
    } 

    public function location_title() {
        return $this->hasOne(Location_title::class);
       }

       public function company_media_accounts() {
        return $this->hasMany(Company_media_account::class);
       }

    

       protected $fillable =[
            'who_we_are',
            'services',
            'objectives',
            'partners',
            'feedbacks',
            'employee_of_the_months',
            'social_media',
            'locations',
            'page_id'
       ];

}
