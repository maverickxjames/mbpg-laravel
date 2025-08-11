<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\NAACController;
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


// Course Page Route
Route::get('/courses', [CourseController::class,'courses'])->name('courses');

// Department Page Route
Route::get('/departments', [DepartmentController::class, 'departments'])->name('departments');

// NAAC Page Route
Route::get('iqac',[NAACController::class,'iqac'])->name('iqac');
Route::get('institutional-distinctiveness',[NAACController::class,'institutional_distinctiveness'])->name('institutional_distinctiveness');
Route::get('aap',[NAACController::class, 'aap'])->name('aap');
Route::get('par',[NAACController::class, 'par'])->name('par');
Route::get('aishe',[NAACController::class, 'aishe'])->name('aishe');
Route::get('iiqa-dvv',[NAACController::class, 'iiqa_dvv'])->name('iiqa_dvv');
Route::get('iqac-minutes-atr',[NAACController::class, 'iqac_minutes_atr'])->name('iqac_minutes_atr');
Route::get('/ncte',[NAACController::class, 'ncte'])->name('ncte');

// Academics Page Route
Route::get('/academic-calendar', [AcademicsController::class, 'academicCalendar'])->name('academic_calendar');
Route::get('co-pso', [AcademicsController::class, 'co_pso'])->name('co_pso');
Route::get('results', [AcademicsController::class, 'results'])->name('results');
Route::get('activity', [AcademicsController::class, 'activity'])->name('activity');
Route::get('achievement', [AcademicsController::class, 'achievement'])->name('achievement');
Route::get('MoU-collabration', [AcademicsController::class, 'MoU_collaboration'])->name('MoU_collaboration');

// Admission Page Route
Route::get('admission-process',[AdmissionController::class, 'admissionProcess'])->name('admission_process');
Route::get('pay-online',[AdmissionController::class, 'payOnline'])->name('pay_online');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    
});

require __DIR__.'/auth.php';
