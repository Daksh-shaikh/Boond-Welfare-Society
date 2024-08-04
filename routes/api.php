<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Api;
use Illuminate\Support\Facades\Route;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('registration', [Api::class, 'registration']);


Route::get('userCheck', [Api::class, 'user_check']);

Route::post('memberRegistration', [Api::class, 'memberRegistration']);


Route::get('getGalleryAllImages', [Api::class, 'getGalleryAllImages']);




Route::get('getAnnouncement', [Api::class, 'getAnnouncement']);

Route::get('getContactUS', [Api::class, 'getContactUS']);

// Route::get('getMemberRegistrationAmount', [Api::class, 'getMemberRegistrationAmount']);
Route::post('getDonation', [Api::class, 'getDonation']);
Route::get('getAmount', [Api::class, 'getAmount']);



