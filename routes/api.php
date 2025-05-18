<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackgroundController;

Route::get('/company/{name}', [BackgroundController::class, 'index']);

