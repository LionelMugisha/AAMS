<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AlumniRegistrationController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MemberRegistrationController;
use App\Http\Controllers\TryController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [LandingController::class,'index']);

// Login Routes
Route::get('login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//User Registration 
Route::post('member-registration', [RegistrationController::class, 'memberstore'])->name('member.registration');
Route::post('alumni-registration', [RegistrationController::class, 'alumnistore'])->name('alumni.registration');

//main dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


//Event Routes
Route::get('admin/event', [EventController::class, 'index'])->name('admin.event');
Route::get('admin/event/new', [EventController::class, 'create'])->name('admin.event.create');
Route::post('admin/event/new', [EventController::class, 'store'])->name('admin.event.save');
Route::get('admin/event/edit-event/{id}', [EventController::class, 'edit']);
Route::put('admin/event/update-event/{id}', [EventController::class, 'update']);
Route::delete('admin/event/delete-event/{id}', [EventController::class, 'destroy']);
//Gallery Routes
Route::get('admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery');
Route::get('admin/gallery/new', [GalleryController::class, 'create'])->name('admin.gallery.create');
Route::post('admin/gallery/new', [GalleryController::class, 'store'])->name('admin.gallery.save');
Route::delete('admin/gallery/delete-gallery/{id}', [GalleryController::class, 'destroy']);
//Admin Alumni Routes
Route::get('admin/alumni', [AdminController::class ,'alumniIndex'])->name('admin.alumni');

//Admin Member Routes
Route::get('admin/member', [AdminController::class ,'memberIndex'])->name('admin.member');


//Members page routes
Route::get('member', [MemberController::class, 'index'])->name('memberdashboard');


//Alumni page routes
Route::get('alumni', [AlumniController::class, 'index'])->name('alumnidashboard');


//User Registration Routes
Route::get('/alumnisignup', [RegistrationController::class, 'alumniindex']);
Route::get('/membersignup', [RegistrationController::class, 'memberindex']);
