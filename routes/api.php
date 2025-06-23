<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackgroundController;
use App\Models\Background;
use \App\Http\Controllers\CompanyController;


//API for company info
Route::get('/info/company/{company}' ,[CompanyController::class, 'show']);
 

//API for background info
Route::get ('/info/background/{background}' , [BackgroundController::class, 'show']);
