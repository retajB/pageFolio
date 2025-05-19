<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('admin');
})->name('home');


Route::post('/create', function () {
    return view('create');
})->name('create.page');

Route::get('/create', function () {
    return view('create');
})->name('create.page');

Route::get('/edit', function () {
    return view('edit');
})->name('edit.page');

Route::post('/create' ,[StoreController::class ,'store'])->name('create.store');

Route::get('/companies' , [CompanyController::class ,'index'])->name('companies');

Route::get('/company' , [CompanyController::class ,'show'])->name('companies.details');