<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin');
});


Route::get('/create', function () {
    return view('create');
})->name('create.page');

