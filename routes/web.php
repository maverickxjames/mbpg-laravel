<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// About page route
Route::get('about',[AboutController::class,'about'])->name('about');
Route::get('about/code-of-conduct/{page}', [AboutController::class, 'conduct'])->name('conduct');
Route::get('about/chairman_msg',[AboutController::class,'chairman_msg'])->name('chairman_msg');
Route::get('about/director-msg',[AboutController::class,'director_msg'])->name('director_msg');
Route::get('about/principal_msg',[AboutController::class,'principal_msg'])->name('principal_msg');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    
});

require __DIR__.'/auth.php';
