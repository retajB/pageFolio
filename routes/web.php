<?php

use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;





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

Route::post('/createSection/services/{section}', [ServiceController::class, 'store'])->name('service.store'); //store services for company



// تعديل بيانات الشركة
Route::patch('/edit/company/{company}' , [CompanyController::class, 'update'])->name('company.update');

// تعديل بيانات المستخدم
Route::patch('/edit/user/{user}' , [UserController::class, 'update'])->name('user.update');

Route::patch('/edit/color/{color}' , [PageController::class, 'Color_update'])->name('color.update');


//
//Route::post('/createSections/background/{request}' ,[BackgroundController::class ,'store'])->name('store.background');