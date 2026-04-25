<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TelegramController;

Route::get('/', function () {
    return view('index');
});

Route::post('/contact', [TelegramController::class, 'sendMessage'])->name('contact.send');
