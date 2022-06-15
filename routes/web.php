<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contacts', [ContactController::class, 'index'])
->name('contacts.index')
->middleware(['auth', 'verified']);

Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store')->middleware(['auth', 'verified']);

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create')->middleware(['auth', 'verified']);

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show')->middleware(['auth', 'verified']);

Route::put('/contacts/{id}', [ContactController::class, 'update'])->name('contacts.update')->middleware(['auth', 'verified']);

Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy')->middleware(['auth', 'verified']);

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit')->middleware(['auth', 'verified']);

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

