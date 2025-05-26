<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\UserController;




Route::get('/create', function () {
    return view('create');
})->name('create.page');

Route::get('/edit', function () {
    return view('edit');
})->name('edit.page');

Route::post('/create' ,[StoreController::class ,'store'])->name('create.store');



    //company routing...
Route::get('/', [CompanyController::class, 'index'])->name('home');

    //go to edit page
Route::get('edit/company/{company}', [CompanyController::class, 'edit'])->name('edit.company');

    //delete company information
Route::delete('/company/{company}', [CompanyController::class, 'destroy'])->name('delete.company');

    //updating the company info
//Route::post('/edit/company/{company}' , [CompanyController::class, 'update'])->name('company.update');
    //end of company routing...
Route::resource('company', CompanyController::class);

    //section routing...
Route::get('/createSection/{pageId}', [SectionController::class, 'createSectionForm'])->name('createSections.page');


    //user routing...
Route::put('/edit/{user}' , [UserController::class, 'update'])
        ->name('user.update');


