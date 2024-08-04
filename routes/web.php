<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AnnouncementController;
use App\Http\Controllers\Frontend\ContactUsController;
use App\Http\Controllers\Frontend\DonationController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Frontend\MemberRegistrationController;
use App\Http\Controllers\Frontend\LoginController;


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

Route::get('/', [LoginController::class, 'index'])->name('user');
Route::get('/login', [LoginController::class, 'index'])->name('user.log');

Route::post('/loginpost', [LoginController::class, 'login'])->name('user.login');

Route::get('/home', [HomeController::class, 'index'])->name('user.home');
Route::post('/postsubmit_home', [HomeController::class, 'postsubmit_home'])->name('user.postsubmit_home');
// Route::get('/submit_home', [HomeController::class, 'submit_home'])->name('user.submit_home');
Route::get('homeStore/{id}/destroyHome', [HomeController::class, 'destroyHome'])->name('store.destroyHome');
Route::get('homeStore/edit/{id}', [HomeController::class, 'edit'])->name('home.edit');
Route::post('homeStore/update', [HomeController::class, 'update'])->name('home.update');


Route::get('/memberRegistration', [MemberRegistrationController::class, 'index'])->name('user.member_registration');
// Route::get('/memberRegistrationEdit/{id}/edit', [MemberRegistrationController::class,'edit'])->name('edit.registration');
Route::post('/memberRegistrationAmount', [MemberRegistrationController::class, 'store'])->name('member.amount');
Route::get('/memberRegistration/{id}/destroyMemberRegistration', [MemberRegistrationController::class, 'destroyMemberRegistration'])->name('store.destroyMemberRegistration');
Route::post('/memberRegistrationDeleteMultiple', [MemberRegistrationController::class, 'deleteMultiple'])->name('store.deleteMultiple');
Route::get('/memberRegistration/edit/{id}', [MemberRegistrationController::class, 'Edit'])->name('reg.edit');
Route::post('/memberRegistrationUpdate', [MemberRegistrationController::class, 'Update'])->name('reg.update');

Route::get('/donation', [DonationController::class, 'index'])->name('user.donation');
Route::post('/donationStore', [DonationController::class, 'store'])->name('store.donation');
Route::post('/donationSave', [DonationController::class, 'save'])->name('save.donation');
Route::get('donationStore/{id}/destroyAmount', [DonationController::class, 'destroyAmount'])->name('store.destroyAmount');
Route::get('donationSave/{id}/destroyCause', [DonationController::class, 'destroySave'])->name('save.destroySave');


Route::get('/gallery', [GalleryController::class, 'index'])->name('user.gallery');
Route::post('/postsubmit_gallery', [GalleryController::class, 'postsubmit_gallery'])->name('user.postsubmit_gallery');
Route::get('gallery/edit/{id}', [GalleryController::class, 'edit'])->name('gallery.edit');
Route::post('gallery/update', [GalleryController::class, 'update'])->name('gallery.update');
Route::get('galleryStore/{id}/destroyGallery', [GalleryController::class, 'destroyGallery'])->name('store.destroyGallery');


Route::get('/announcement', [AnnouncementController::class, 'index'])->name('user.Announcement');
Route::post('/announcementStore', [AnnouncementController::class, 'store'])->name('store.announcement');
Route::get('announcementStore/{id}/destroy', [AnnouncementController::class, 'destroy'])->name('store.destroy');
Route::post('announcementStore/update', [AnnouncementController::class, 'update'])->name('announcement.update');
Route::get('announcementStore/edit/{id}', [AnnouncementController::class, 'edit'])->name('announcement.edit');

Route::get('/contactUs', [ContactUsController::class, 'index'])->name('user.contactUs');
Route::post('/contactUsStore', [ContactUsController::class, 'store'])->name('store.contactUs');
Route::get('contactUsStore/{id}/destroy', [ContactUsController::class, 'destroy'])->name('contact.destroy');
Route::get('contact/edit/{id}', [ContactUsController::class, 'edit'])->name('contact.edit');
Route::post('contact/update', [ContactUsController::class, 'update'])->name('contact.update');
