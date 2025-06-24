<?php

use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\BackTitleController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EotmTitleController;
use App\Http\Controllers\FeedbackTitleController;
use App\Http\Controllers\LocationTitleController;
use App\Http\Controllers\ObjectiveTitleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\PartnerController;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerTitleController;
use App\Http\Controllers\ServiceTitleController;
use App\Http\Controllers\UserController;
use App\Models\Back_title;
use App\Models\Feedback_title;
use App\Models\Partner;

Route::get('/create', function () {
    return view('create');
})->name('create.page');

Route::get('/edit', function () {
    return view('edit');
})->name('edit.page');

Route::post('/create' ,[StoreController::class ,'store'])->name('create.store');


Route::get('/', [CompanyController::class, 'index'])->name('home');


//go to edit page
Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('edit.company');

//delete company information
Route::delete('/company/{company}', [CompanyController::class, 'destroy'])->name('delete.company');

//end of company routing...



//section  routing...

Route::get('/createSection/{page}', [SectionController::class, 'createSectionForm'])->name('createSections.page');

Route::post('/createSection/background/{section}', [BackgroundController::class, 'store'])->name('background.store'); //store background for company

// Route::post('/createSection/backTitle/{section}' ,[BackTitleController::class, 'store'])->name('backTitle.store');

Route::post('/createSection/eotmTitle/{section}' ,[EotmTitleController::class, 'store'])->name('eotmTitle.store'); 

//route for the feedback title section 
Route::post('/createSection/feedbackTitle/{section}', [FeedbackTitleController::class, 'store'])->name('feedbackTitle.store'); 

//route for the location title section 
Route::post('/createSection/locationTitle/{section}', [LocationTitleController::class, 'store'])->name('locationTitle.store'); 

//route for the objectives title section 
Route::post('/createSection/objectiveTitle/{section}', [ObjectiveTitleController::class, 'store'])->name('objectiveTitle.store'); 

//route for the partners title section 
Route::post('/createSection/partnersTitle/{section}', [PartnerTitleController::class, 'store'])->name('partnersTitle.store'); 

//route for the services title section 
Route::post('/createSection/serviceTitle/{section}', [ServiceTitleController::class, 'store'])->name('serviceTitle.store'); 





// update company info 
Route::patch('/edit/company/{company}' , [CompanyController::class, 'update'])->name('company.update');

// update user info
Route::patch('/edit/user/{user}' , [UserController::class, 'update'])->name('user.update');

//update company theme color
Route::patch('/edit/color/{color}' , [PageController::class, 'Color_update'])->name('color.update');


//
//Route::post('/createSections/background/{request}' ,[BackgroundController::class ,'store'])->name('store.background');