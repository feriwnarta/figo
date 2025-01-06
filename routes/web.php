<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::controller(\App\Http\Controllers\SensorController::class)->group(function () {
    Route::post('/sensor', 'create');
});

Route::get('/', \App\Livewire\HomePage::class)->name('home');
