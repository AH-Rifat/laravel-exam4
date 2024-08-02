<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::controller(ContactController::class)->prefix('/contacts')->group(function () {
    Route::get('/', 'index')->name('/');
    Route::get('/create', 'contactForm')->name('/create');
    Route::post('/', 'store')->name('/store');
    Route::get('/{id}/edit', 'editForm')->name('/edit');
    Route::put('/{id}', 'updateForm')->name('/update');
    Route::delete('/{id}', 'deleteContact')->name('/destroy');
});
