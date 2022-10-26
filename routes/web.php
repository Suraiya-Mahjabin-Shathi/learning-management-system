<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LearnerController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\InstructorController;



Route::get('/', [HomeController::class, 'Dashboard']);
Route::get('/Categories', [CategoryController::class, 'list']);
Route::get('/instructor', [InstructorController::class, 'list']);
Route::get('/learner', [LearnerController::class, 'list']);
Route::get('/courses', [CourseController::class, 'list']);