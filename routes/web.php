<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\admin\AdminController;

Auth::routes();

// user side
Route::get('/', [HomeController::class, 'index'])->name("index");
Route::get('/about', [HomeController::class, 'about'])->name("about");
Route::get('/treatments', [HomeController::class, 'treatments'])->name("treatments");
Route::get('/our-doctors', [HomeController::class, 'ourDoctors'])->name("our-doctors");
Route::get('/doctor-single', [HomeController::class, 'doctorSingle'])->name("doctor-single");
//Route::get('/faq', [HomeController::class, 'faq'])->name("faq");
Route::get('/contact', [HomeController::class, 'contact'])->name("contact");
Route::get('/blog/{name}', [HomeController::class, 'blog'])->name("blog");

// admin side
Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/', [AdminController::class, 'index'])->name("admin.index");
    Route::get('/all', [AdminController::class, 'all'])->name("admin.all");
    Route::get('/new', [AdminController::class, 'index'])->name("admin.new");
    Route::get('/profile/{id}', [AdminController::class, 'profile'])->name("admin.profile");
    Route::get('/setting', [AdminController::class, 'setting'])->name("admin.setting");
});
