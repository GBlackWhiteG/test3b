<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\NumbersController;

Route::get('/', [ContactsController::class, 'index'])->name('contacts.index');
Route::post('/contacts', [ContactsController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{contact}', [ContactsController::class, 'show'])->name('contacts.show');

Route::post('/numbers', [NumbersController::class, 'store'])->name('numbers.store');
