<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\CourseController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\EnrollController;
use App\Http\Controllers\Backend\InstructorController;
use App\Http\Controllers\Backend\UserController;
use App\Http\Controllers\Backend\ShowPageController;
use App\Http\Controllers\Backend\CoverAreaController;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/', function () {
//    return view('frontend.home');
//})->name('home');
//
//Route::get('/courses', function () {
//    return view('frontend.courses');
//})->name('courses');
//
//Route::get('/detail', function () {
//    return view('frontend.details');
//})->name('detail');
//
//Route::get('/about', function () {
//    return view('frontend.about');
//})->name('about');
//
//Route::get('/contact', function () {
//    return view('frontend.contact');
//})->name('contact');


Auth::routes();


Route::middleware(['auth'])->group(function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profileUpdate/{id}', [HomeController::class, 'profileUpdate'])->name('profileUpdate');
    Route::get('/changePassword/{id}', [HomeController::class, 'changePassword'])->name('changePassword');

    Route::match(['get', 'post'], 'setting', [SettingController::class, 'setting'])->name('setting');
//    Route::post('emailSetup', [SettingController::class, 'emailSetup'])->name('emailSetup');
    Route::match(['get', 'post'], 'emailSetup', [SettingController::class, 'emailSetup'])->name('emailSetup');

    Route::delete('category/delete/{id}', [CategoryController::class,'delete'])->name('category.delete');
    Route::resource('category', CategoryController::class)->parameters(['category' => 'id']);
    Route::post('category/update/{id}', [CategoryController::class,'update'])->name('category.update');

    Route::delete('course/delete/{id}', [CourseController::class,'delete'])->name('course.delete');
    Route::resource('course', CourseController::class)->parameters(['course' => 'id']);
    Route::post('course/update/{id}', [CourseController::class,'update'])->name('course.update');

//    Route::delete('enroll/delete/{id}', [CourseController::class,'delete'])->name('enroll.delete');
    Route::resource('enroll', EnrollController::class)->parameters(['enroll' => 'id']);
//    Route::post('enroll/update/{id}', [CourseController::class,'update'])->name('enroll.update');

    Route::delete('instructor/delete/{id}', [InstructorController::class,'delete'])->name('instructor.delete');
    Route::resource('instructor', InstructorController::class)->parameters(['instructor' => 'id']);
    Route::post('instructor/update/{id}', [InstructorController::class,'update'])->name('instructor.update');

    //    Route::delete('instructor/delete/{id}', [CourseController::class,'delete'])->name('instructor.delete');
    Route::resource('user', UserController::class)->parameters(['user' => 'id']);
//    Route::post('instructor/update/{id}', [CourseController::class,'update'])->name('instructor.update');


    Route::resource('coverarea', CoverAreaController::class)->parameters(['coverarea' => 'id']);


    Route::resource('showpage', ShowPageController::class)->parameters(['showpage' => 'id']);




});
