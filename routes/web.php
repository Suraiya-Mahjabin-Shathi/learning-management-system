<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\FrontendHomeController;


//for website

Route::get('/', [FrontendHomeController::class,'home']) -> name('home');



//for admin

Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');

Route::group(['middleware'=>'auth'],function(){

Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/', [HomeController::class, 'Dashboard'])->middleware('auth')->name('dashboard');
Route::get('/Categories', [CategoryController::class, 'list']);
Route::get('/Categories/create', [CategoryController::class, 'create']);
Route::post('/Categories/store', [CategoryController::class, 'store']);

Route::get('/Categories/delete/{category_id}',[CategoryController::class,'deleteCategory'])->name('admin.categories.delete');
Route::get('/Categories/view/{category_id}',[CategoryController::class,'viewCategory'])->name('admin.categories.view');

Route::get('/instructor', [InstructorController::class, 'list']);
Route::get('/instructor/create', [InstructorController::class, 'create']);
Route::post('/instructor/store',[InstructorController::class, 'store']);
Route::get('/learner', [LearnerController::class, 'list']);
Route::get('/learner/create', [LearnerController::class, 'create']);
Route::post('/learner/store', [LearnerController::class, 'store']);
Route::get('/courses', [CourseController::class, 'list']);
Route::get('/content', [ContentController::class, 'list']);
Route::get('/quizzes', [QuizController::class, 'list']);
Route::get('/feedback', [FeedbackController::class, 'list']);
Route::get('/certificate', [CertificateController::class, 'list']);
Route::get('/payment', [PaymentController::class, 'list']);
Route::get('/settings', [SettingsController::class, 'list']);

});