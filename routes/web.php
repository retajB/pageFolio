<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\SectionController;




Route::get('/create', function () {
    return view('create');
})->name('create.page');

Route::get('/edit', function () {
    return view('edit');
})->name('edit.page');

Route::post('/create' ,[StoreController::class ,'store'])->name('create.store');

//Route::get('/companies' , [CompanyController::class ,'index'])->name('companies');

//Route::get('/company' , [CompanyController::class ,'show'])->name('companies.details');

//Route::get('/companies', [CompanyController::class, 'index'])->name('companies');

//company routing...

Route::get('/', [CompanyController::class, 'index'])->name('home');


//go to edit page
Route::get('/company/{company}/edit', [CompanyController::class, 'edit'])->name('edit.company');

//delete company information
Route::delete('/company/{company}', [CompanyController::class, 'destroy'])->name('delete.company');

//end of company routing...

//section routing...

Route::get('/createSection/{pageId}', [SectionController::class, 'createSectionForm'])->name('createSections.page');
