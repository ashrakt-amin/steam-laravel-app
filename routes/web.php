<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\HomeController;
use App\Http\Controllers\Dashboard\TeamController;
use App\Http\Controllers\Dashboard\ContactController;
use App\Http\Controllers\Dashboard\ContentController;
use App\Http\Controllers\Dashboard\CoursesController;
use App\Http\Controllers\Dashboard\LanguageController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Dashboard\ObjectiveController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use App\Http\Controllers\Auth\AuthenticatedSessionController;

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

require __DIR__.'/auth.php';

Route::group( [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath','auth']
], function () {
    Route::get('/admin',[DashboardController::class,'index']);
    Route::resource('/allcourses',CoursesController::class);
    Route::resource('/content',ContentController::class);
    Route::resource('/language',LanguageController::class);
    Route::resource('/objective',ObjectiveController::class);
    Route::resource('/allteam',TeamController::class);
    Route::resource('/message',ContactController::class);
    Route::resource('/data',HomeController::class);

   




  
});


Route::group( [
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

Route::get('/home',[HomeController::class,'index'])->name('user.index');
Route::get('/about',[HomeController::class,'aboutUs'])->name('user.aboutUs');
Route::get('/courses',[HomeController::class,'courses'])->name('user.courses');
Route::get('/course/{id}',[HomeController::class,'Details'])->name('course.details');

Route::get('/team',[HomeController::class,'team'])->name('user.team');
Route::get('/accomplishments',[HomeController::class,'accomplishments'])->name('user.accomplishments');
Route::get('/gallary',[HomeController::class,'gallary'])->name('user.gallary');
Route::get('/contact',[HomeController::class,'contact'])->name('user.contact');

});