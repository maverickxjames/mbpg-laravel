<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AcademicsController;
use App\Http\Controllers\AdmissionController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CriteriaController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\ForumsController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\InfrastructureController;
use App\Http\Controllers\NAACController;
use App\Http\Controllers\NssController;
use App\Http\Controllers\OtherController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\StudentController;
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
Route::get('ncte',[NAACController::class, 'ncte'])->name('ncte');

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

// Infrastructure 
Route::get('infrastructure',[InfrastructureController::class, 'infrastructure'])->name('infrastructure');

// NSS
Route::get('nss',[NssController::class, 'nss'])->name('nss');

// research
Route::get('research-innovation',[ResearchController::class, 'research'])->name('research');

// Forums
Route::get('alumni-association',[ForumsController::class, 'alumni_association'])->name('alumni_association');
Route::get('anti-ragging-cell',[ForumsController::class, 'anti_ragging'])->name('anti_ragging');
Route::get('placement-cell',[ForumsController::class, 'placement'])->name('placement');
Route::get('sveep-cell',[ForumsController::class, 'sveep'])->name('sveep');
Route::get('special-cell',[ForumsController::class, 'special'])->name('special');
Route::get('grievance-redressal-cell',[ForumsController::class, 'grievance_redressal'])->name('grievance_redressal');
Route::get('women-cell',[ForumsController::class, 'women'])->name('women');

// Student
Route::get('e-news',[StudentController::class, 'e_news'])->name('e_news');
Route::get('feedback',[StudentController::class, 'feedback'])->name('feedback');
Route::get('development',[StudentController::class, 'development'])->name('development');
Route::get('vivarnika',[StudentController::class, 'vivarnika'])->name('vivarnika');

// Gallery
Route::get('gallery',[GalleryController::class, 'gallery'])->name('gallery');
    
// Contact Us`
Route::get('contact', [ContactController::class,'contact'])->name('contact');

// Criteria Routes
Route::get('criteria-1', [CriteriaController::class, 'criteria1'])->name('criteria1');
Route::get('criteria-2', [CriteriaController::class, 'criteria2'])->name('criteria2');
Route::get('criteria-3', [CriteriaController::class, 'criteria3'])->name('criteria3');
Route::get('criteria-4', [CriteriaController::class, 'criteria4'])->name('criteria4');
Route::get('criteria-5', [CriteriaController::class, 'criteria5'])->name('criteria5');
Route::get('criteria-6', [CriteriaController::class, 'criteria6'])->name('criteria6');
Route::get('criteria-7', [CriteriaController::class, 'criteria7'])->name('criteria7');

// pdf view
Route::get('/pdf/{slug}', [OtherController::class, 'pdfView'])->name('pdf_view');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    

    
});

require __DIR__.'/auth.php';
