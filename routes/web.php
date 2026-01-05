<?php

use Illuminate\Support\Facades\Route;
use Filament\Facades\Filament;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return redirect(Filament::getLoginUrl());
})->name('login');
