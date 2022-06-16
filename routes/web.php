<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\Settings\AccountController;


Route::get('/', function () {
    return view('welcome');
});


// Route::get('/contacts', [ContactController::class, 'index'])
// ->name('contacts.index')
// ->middleware(['auth', 'verified']);

// Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store')->middleware(['auth', 'verified']);

// Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create')->middleware(['auth', 'verified']);

// Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show')->middleware(['auth', 'verified']);

// Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update')->middleware(['auth', 'verified']);

// Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy')->middleware(['auth', 'verified']);

// Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit')->middleware(['auth', 'verified']);

//  Route::resource('/contacts', ContactController::class)->parameters([
//     'contacts' => 'name',
//  ]);

//  Route::resource('/contacts', ContactController::class)->names([
//     'index' => 'contacts.all',
//     'show' => 'contacts.view'
//  ]);

// Route::resource('/companies.contacts', ContactController::class);

// Route::resources([
//     '/contacts' => ContactController::class,
//     '/companies' => CompanyController::class,
// ]);

// Route::resource('/contacts', ContactController::class)->only(['create', 'store', 'edit', 'update', 'destroy']);
// Route::resource('/contacts', ContactController::class)->except(['create', 'store', 'edit', 'update', 'destroy']);

Route::resources([
    '/contacts' => ContactController::class,
    '/companies' => CompanyController::class
]);

Auth::routes(['verify' => true]);

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth', 'verified']);

Route::get('/settings/account', [AccountController::class, 'index']);
