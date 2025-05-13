<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;

Route::get('/', function () {
    return view('admin');
});


Route::post('/create', function () {
    return view('create');
})->name('create.page');

Route::get('/edit', function () {
    return view('edit');
})->name('edit.page');

Route::post('/create' ,[StoreController::class ,'store'])->name('create.store');
