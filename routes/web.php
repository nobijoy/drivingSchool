<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\CategoryController;





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

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/courses', function () {
    return view('frontend.courses');
})->name('courses');

Route::get('/detail', function () {
    return view('frontend.details');
})->name('detail');

Route::get('/about', function () {
    return view('frontend.about');
})->name('about');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');


Auth::routes();


Route::middleware(['auth'])->group(function () {

    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');

    Route::delete('category/delete/{id}', [CategoryController::class,'delete'])->name('category.delete');
    Route::resource('category', CategoryController::class)->parameters(['category' => 'id']);
    Route::post('category/update/{id}', [CategoryController::class,'update'])->name('category.update');

    Route::delete('course/delete/{id}', [CategoryController::class,'delete'])->name('course.delete');
    Route::resource('course', CategoryController::class)->parameters(['course' => 'id']);
    Route::post('course/update/{id}', [CategoryController::class,'update'])->name('course.update');


});
