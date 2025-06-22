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
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PartnerTitleController;
use App\Http\Controllers\ServiceTitleController;
use App\Http\Controllers\UserController;
use App\Models\Back_title;
use App\Models\Feedback_title;

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



//section routing...

Route::get('/createSection/{page}', [SectionController::class, 'createSectionForm'])->name('createSections.page');

Route::post('/createSection/background/{section}', [BackgroundController::class, 'store'])->name('background.store'); //store background for company

Route::post('/createSection/backTitle/{section}' ,[BackTitleController::class, 'store'])->name('backTitle.store');

Route::post('/createSection/eotmTitle/{section}' ,[EotmTitleController::class, 'store'])->name('eotmTitle.store'); 

Route::post('/createSection/feedbackTitle/{section}', [FeedbackTitleController::class, 'store'])->name('feedbackTitle.store'); 

Route::post('/createSection/locationTitle/{section}', [LocationTitleController::class, 'store'])->name('locationTitle.store'); 

Route::post('/createSection/objectiveTitle/{section}', [ObjectiveTitleController::class, 'store'])->name('objectiveTitle.store'); 

Route::post('/createSection/partnersTitle/{section}', [PartnerTitleController::class, 'store'])->name('partnersTitle.store'); 

Route::post('/createSection/serviceTitle/{section}', [ServiceTitleController::class, 'store'])->name('serviceTitle.store'); 


Route::post('/createSection/services/{section}', [ServiceController::class, 'store'])->name('service.store'); //store services for company



// تعديل بيانات الشركة
Route::patch('/edit/company/{company}' , [CompanyController::class, 'update'])->name('company.update');

// تعديل بيانات المستخدم
Route::patch('/edit/user/{user}' , [UserController::class, 'update'])->name('user.update');

Route::patch('/edit/color/{color}' , [PageController::class, 'Color_update'])->name('color.update');


//
//Route::post('/createSections/background/{request}' ,[BackgroundController::class ,'store'])->name('store.background');