<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::controller(ContactController::class)->prefix('/contact')->group(function () {
    Route::get('/', 'index');
});
