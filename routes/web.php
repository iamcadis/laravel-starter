<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    // ->middleware(['auth', 'verified', 'prevent-back-on-logout'])
    ->name('dashboard');

// Route::middleware(['auth', 'prevent-back-on-logout'])->group(function () {
// Route::redirect('settings', 'settings/profile', Response::HTTP_MOVED_PERMANENTLY);
// Route::prefix('settings')->group(function () {
//     Route::get('profile', Profile::class)->name('settings.profile');
//     Route::get('password', Password::class)->name('settings.password');
//     Route::get('appearance', Appearance::class)->name('settings.appearance');
// });
// });

require __DIR__ . '/auth.php';
