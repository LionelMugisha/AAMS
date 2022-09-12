<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegistrationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\OpportunityController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [LandingController::class,'index'])->middleware('guest');

// Login Routes
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');


//User Registration Routes
Route::get('/alumnisignup', [RegistrationController::class, 'alumniindex'])->middleware('guest');
Route::get('/membersignup', [RegistrationController::class, 'memberindex'])->middleware('guest');;
Route::post('member-registration', [RegistrationController::class, 'memberstore'])->name('member.registration')->middleware('guest');
Route::post('alumni-registration', [RegistrationController::class, 'alumnistore'])->name('alumni.registration')->middleware('guest');


//main routes
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//Admin Routes
Route::group(['middleware' => ['auth', 'isAdmin']], function() {
    //Event Routes
    Route::get('admin/event', [EventController::class, 'index'])->name('admin.event');
    Route::get('admin/event/new', [EventController::class, 'create'])->name('admin.event.create');
    Route::post('admin/event/save', [EventController::class, 'store'])->name('admin.event.save');
    Route::get('admin/event/edit-event/{id}', [EventController::class, 'edit']);
    Route::put('admin/event/update-event/{id}', [EventController::class, 'update']);
    Route::delete('admin/event/delete-event/{id}', [EventController::class, 'destroy']);
    //Gallery Routes
    Route::get('admin/gallery', [GalleryController::class, 'index'])->name('admin.gallery');
    Route::get('admin/gallery/new', [GalleryController::class, 'create'])->name('admin.gallery.create');
    Route::post('admin/gallery/save', [GalleryController::class, 'store'])->name('admin.gallery.save');
    Route::delete('admin/gallery/delete-gallery/{id}', [GalleryController::class, 'destroy']);
    //job opportunies routes
    Route::get('/admin/job_opportunities', [OpportunityController::class, 'aindex'])->name('admin.opportunities');
    Route::get('/admin/job_opportunities/new', [OpportunityController::class, 'acreatepost'])->name('admin.opportunities.create');
    Route::post('/admin/job_opportunities/save', [OpportunityController::class, 'asavepost'])->name('admin.opportunities.save');

    //Admin Alumni Routes
    Route::get('admin/alumni', [AdminController::class ,'alumniIndex'])->name('admin.alumni');
    Route::put('admin/updatealumni_status/{id}', [AdminController::class, 'achangestatus']);
    Route::get('admin/alumni/view-alumni/{id}', [AdminController::class, 'viewAlumni']);
    Route::delete('admin/alumni/delete-alumni/{id}', [AdminController::class, 'deleteAlumni']);

    //Admin Member Routes
    Route::get('admin/member', [AdminController::class ,'memberIndex'])->name('admin.member');
    Route::put('admin/updatemember_status/{id}', [AdminController::class, 'mchangestatus']);
    Route::get('admin/member/view-member/{id}', [AdminController::class, 'viewMember']);
    Route::delete('admin/member/delete-member/{id}', [AdminController::class, 'deleteMember']);

    //Admin Payment Routes
    Route::get('admin/view-payment', [PaymentController::class, 'view'])->name('admin.payment.view');

    //Admin Generate Report Routes
    Route::get('admin/report', [AdminController::class, 'viewTables'])->name('admin.report');
    Route::get('admin/report/report_all_alumni_pdf', [AdminController::class, 'export_alumni_pdf'])->name('export_alumni_pdf');
    Route::get('admin/report/report_unemployed_alumni_pdf', [AdminController::class, 'export_unemployed_alumni_pdf'])->name('export_unemployed_alumni_pdf');
    Route::get('admin/report/report_employed_alumni_pdf', [AdminController::class, 'export_employed_alumni_pdf'])->name('export_employed_alumni_pdf');
    Route::get('admin/report/report_members_pdf', [AdminController::class, 'export_members_pdf'])->name('export_members_pdf');



});


//Member Routes
Route::group(['middleware' => ['auth', 'isMember']], function() {
    Route::get('member', [MemberController::class, 'index'])->name('memberdashboard');
    //Member Opportunity Routes
    Route::get('/member/job_opportunities', [OpportunityController::class, 'mindex'])->name('member.opportunities');
    Route::get('/member/job_opportunities/new', [OpportunityController::class, 'mcreatepost'])->name('member.opportunities.create');
    Route::post('/member/job_opportunities/save', [OpportunityController::class, 'msavepost'])->name('member.opportunities.save');
    //Member Payment Routes
    Route::get('/member/place-payment', [PaymentController::class, 'index'])->name('member.payment');
    Route::get('/member/place-payment/new', [PaymentController::class, 'create'])->name('member.payment.create');
    Route::get('/member/place-payment/save', [PaymentController::class, 'store'])->name('member.payment.save');
    //Member Profile Routes
    Route::get('/member/profile', [ProfileController::class, 'medit'])->name('member.profile');
    Route::put('/member/profile/update-profile', [ProfileController::class, 'mupdate'])->name('member.update-profile');

});


//Alumni Routes
Route::group(['middleware' => ['auth', 'isAlumni']], function() {
    Route::get('alumni', [AlumniController::class, 'index'])->name('alumnidashboard');
    //job opportunies routes
    Route::get('/alumni/job_opportunities', [OpportunityController::class, 'aluindex'])->name('alumni.opportunities');
    Route::get('/alumni/job_opportunities/new', [OpportunityController::class, 'alucreatepost'])->name('alumni.opportunities.create');
    Route::post('/alumni/job_opportunities/save', [OpportunityController::class, 'alusavepost'])->name('alumni.opportunities.save');
    //Alumni Profile Routes
    Route::get('/alumni/profile', [ProfileController::class, 'aledit'])->name('alumni.profile');
    Route::put('/alumni/profile/update-profile', [ProfileController::class, 'alupdate'])->name('alumni.update-profile');
});
