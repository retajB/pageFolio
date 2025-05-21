<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackgroundController;
use App\Models\Background;
use \App\Http\Controllers\CompanyController;


//route for updating the company info
// Route::patch('\background\update\{company}' , [CompanyController::class, 'update'])
//         ->name('company.update');


//route for storing company background
Route::post('\store\background' ,[BackgroundController::class, 'store'])
        ->name('store.Background');