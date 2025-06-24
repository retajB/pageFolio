<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackgroundController;
use App\Models\Background;
use \App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyMediaAccountController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\ObjectiveController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ServiceController;

//API for company info
Route::get('/info/company/{company}' ,[CompanyController::class, 'show']);
 
//API for background info
Route::get ('/info/background/{background}' , [BackgroundController::class, 'show']);

//API for services info 
Route::get('/info/services/{service}' , [ServiceController::class, 'index']);

//API for objectives info
Route::get('/info/objectives/{}', [ObjectiveController::class, 'index']);

//API to get partners info 
Route::get('/info/partners/{}',[PartnerController::class, 'index']);

//API to get feedback info 
Route::get('/info/feedback/{}',[FeedbackController::class, 'index']);

//API to get social media info 
Route::get('/info/socialMedia/{}',[CompanyMediaAccountController::class, 'index']);

//API to get location info 
Route::get('/info/location/{}',[LocationController::class, 'index']);
