<?php

use App\Http\Controllers\CloudinaryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\ListPresensiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProjectImageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusPresensiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'guest.layouts.main')->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('users', UserController::class);
    Route::resource('roles', RoleController::class);
    Route::resource('divisions', DivisionController::class);
    Route::resource('posts', PostController::class);
    Route::resource('informations', InformationController::class);
    Route::resource('projects', ProjectController::class);
    Route::resource('project-images', ProjectImageController::class);
    Route::resource('presensis', PresensiController::class);
    Route::resource('list-presensis', ListPresensiController::class);
    Route::resource('status-presensis', StatusPresensiController::class);
});


Route::post('/cloudinary-test', [CloudinaryController::class, 'testUpload']);

require __DIR__ . '/auth.php';
