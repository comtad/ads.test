<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return redirect('/advert');
});

Route::resource('advert', \App\Http\Controllers\AdverdController::class);

Route::get('advert/get-description/{id}', [\App\Http\Controllers\AdverdController::class, 'getDescription']);
Route::get('advert/get-more-photos/{id}', [\App\Http\Controllers\AdverdController::class, 'getMorePhotos']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
