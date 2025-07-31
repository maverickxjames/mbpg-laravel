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
Route::get('/about',[AboutController::class,'about'])->name('about');
Route::get('/code-of-conduct/{page}', [AboutController::class, 'conduct'])->name('conduct');
Route::get('/chairman_msg',[AboutController::class,'chairman_msg'])->name('chairman_msg');
Route::get('/director-msg',[AboutController::class,'director_msg'])->name('director_msg');
Route::get('/principal_msg',[AboutController::class,'principal_msg'])->name('principal_msg');
Route::get('/vision-mission',[AboutController::class,'vision_mission'])->name('vision_mission');
Route::get('/swoc-analysis', [AboutController::class, 'swoc'])->name('swoc_analysis');
Route::get('/perspective-plan', [AboutController::class, 'perspective'])->name('perspective_plan');
Route::get('/organogram', [AboutController::class, 'organogram'])->name('organogram');
Route::get('/e-governance', [AboutController::class, 'e_governance'])->name('e_governance');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    
});

require __DIR__.'/auth.php';
