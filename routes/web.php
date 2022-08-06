<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MemberController;
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

Route::get('admin', [AdminController::class, 'index'])->name('admin.dashboard');
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




Route::get('member', [MemberController::class, 'index']);

Route::get('alumni', [AlumniController::class, 'index']);



Route::get('login', [LoginController::class, 'index']);