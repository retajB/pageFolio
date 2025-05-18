<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackgroundController;

Route::get('/comany{id}', [BackgroundController::class, 'index']);

