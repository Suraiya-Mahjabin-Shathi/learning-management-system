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
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\CertificateController;
use App\Http\Controllers\FrontendHomeController;
use App\Http\Controllers\Frontend\FrontendEnrollmentController;


//for website

Route::get('/', [FrontendHomeController::class,'home']) -> name('home');
Route::post('/login',[FrontendHomeController::class,'login']) ->name('home.login');
Route::post('/registration',[FrontendHomeController::class,'registration']) ->name('home.registration');
Route::get('/search',[FrontendHomeController::class,'search'])->name('user.search');

Route::get('/content/{content_id}',[FrontendHomeController::class,'content'])->name('home.content');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/userlogout',[FrontendHomeController::class,'userlogout']) ->name('home.logout');
    Route::get('/profile',[FrontendHomeController::class,'profile'])->name('user.profile');
    Route::get('/profile/edit/{profile_id}',[FrontendHomeController::class,'editProfile'])->name('profile.edit');
    Route::put('/profile/update/{profile_id}',[FrontendHomeController::class,'updateProfile'])->name('profile.update');
});

// Course enrollment 
Route::get('/enrollment-form/{course_id}',[FrontendEnrollmentController::class,'form'])->name('enrollment.form');
Route::post('/enrollment-form-save/{course_id}',[FrontendEnrollmentController::class,'save'])->name('enrollment.frontend.save');

//Feedback
Route::get('/feedback/view/{enrollment_id}',[FeedbackController::class,'view'])->name('feedback.view');
Route::post('/feedback/store/{enrollment_id}',[FeedbackController::class, 'store'])->name('feedback.store');


//for admin
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/do-login',[UserController::class,'doLogin'])->name('do.login');

Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){

Route::get('/logout',[UserController::class,'logout'])->name('logout');

Route::get('/', [HomeController::class,'dashboard'])->name('dashboard');

Route::get('/Categories', [CategoryController::class, 'list'])->name('Categories');
Route::get('/Categories/create', [CategoryController::class, 'create'])->name('Categories.create');
Route::post('/Categories/store', [CategoryController::class, 'store'])->name('Categories.store');

Route::get('/Categories/delete/{category_id}',[CategoryController::class,'deleteCategory'])->name('admin.categories.delete');
Route::get('/Categories/view/{category_id}',[CategoryController::class,'viewCategory'])->name('admin.categories.view');
Route::get('/Categories/edit/{category_id}',[CategoryController::class,'editCategory'])->name('admin.categories.edit');
Route::put('/Categories/update/{category_id}',[CategoryController::class,'update'])->name('Categories.update');

Route::get('/instructor', [InstructorController::class, 'list'])->name('instructor');
Route::get('/instructor/create', [InstructorController::class, 'create'])->name('instructor.create');
Route::post('/instructor/store',[InstructorController::class, 'store'])->name('instructor.store');

Route::get('/instructor/delete/{instructor_id}',[InstructorController::class,'deleteInstructor'])->name('admin.instructor.delete');
Route::get('/instructor/view/{instructor_id}',[InstructorController::class,'viewInstructor'])->name('admin.instructor.view');
Route::get('/instructor/edit/{instructor_id}',[InstructorController::class,'editInstructor'])->name('admin.instructor.edit');
Route::put('/instructor/update/{instructor_id}',[InstructorController::class,'update'])->name('instructor.update');

Route::get('/learner', [LearnerController::class, 'list'])->name('learner');
Route::get('/learner/create', [LearnerController::class, 'create'])->name('learner.create');
Route::post('/learner/store', [LearnerController::class, 'store'])->name('learner.store');

Route::get('/learner/delete/{learner_id}',[LearnerController::class,'deleteLearner'])->name('admin.learner.delete');
Route::get('/learner/view/{learner_id}',[LearnerController::class,'viewLearner'])->name('admin.learner.view');
Route::get('/learner/edit/{learner_id}',[LearnerController::class,'editLearner'])->name('admin.learner.edit');
Route::put('/learner/update/{learner_id}',[LearnerController::class,'update'])->name('learner.update');


Route::get('/enrollment', [EnrollmentController::class, 'list'])->name('enrollment');
Route::get('/enrollment/create', [EnrollmentController::class, 'create'])->name('enrollment.create');
Route::post('/enrollment/store', [EnrollmentController::class, 'store'])->name('enrollment.store');

Route::get('/enrollment/accept/{enrollment_id}',[EnrollmentController::class,'acceptEnrollment'])->name('admin.enrollment.accept');
Route::get('/enrollment/reject/{enrollment_id}',[EnrollmentController::class,'rejectEnrollment'])->name('admin.enrollment.reject');




Route::get('/courses', [CourseController::class, 'list'])->name('courses');
Route::get('/courses/create', [CourseController::class, 'create'])->name('courses.create');
Route::post('/courses/store', [CourseController::class, 'store'])->name('courses.store');

Route::get('/courses/content/{course_id}',[CourseController::class,'content'])->name('admin.course.content');
Route::get('/courses/delete/{course_id}',[CourseController::class,'deleteCourse'])->name('admin.course.delete');
Route::get('/courses/view/{course_id}',[CourseController::class,'viewCourse'])->name('admin.course.view');
Route::get('/course/edit/{course_id}',[CourseController::class,'edit'])->name('admin.course.edit');
Route::put('/course/update/{course_id}',[CourseController::class,'update'])->name('course.update');


Route::get('/content', [ContentController::class, 'list'])->name('content');

Route::get('/quizzes', [QuizController::class, 'list'])->name('quizzes');
Route::get('/feedback', [FeedbackController::class, 'list'])->name('feedback');
Route::get('/certificate', [CertificateController::class, 'list'])->name('certificate');
Route::get('/payment', [PaymentController::class, 'list'])->name('payment');
Route::get('/settings', [SettingsController::class, 'list'])->name('settings');


Route::get('/report', [EnrollmentController::class, 'report'])->name('enrollment.report');
Route::get('/report/search',[EnrollmentController::class,'reportSearch'])->name('enrollment.report.search');
});