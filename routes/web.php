<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Api\ClientApiController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('home.land');
});
Route::get('home', function () {
    return view('home.land');
});
Route::get('programs', function () {
    return view('home/programs');
});
Route::get('clients', function () {
    return view('home/clients');
});
Route::get('contacts', function () {
    return view('home/contact');
});
Route::get('dash/program', function () {
    return view('dash.program');
});
Route::get('dash/enrollment', function () {
    return view('dash.enrollment');
});
Route::get('dash/client', function () {
    return view('dash.client');
});
Route::get('dash_show/client_show', function () {
    return view('dash_show.client_show');
});
// Route::get('dash_show/enrollment_show', function () {
//     return view('dash_show.enrollment_show');
// });

Auth::routes();
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Programs
Route::resource('programs', ProgramController::class)->middleware('auth');

// Clients
Route::resource('clients', ClientController::class)->middleware('auth');
// Route::middleware('auth:sanctum')->get('api/clients/{id}', [App\Http\Controllers\Api\ClientApiController::class, 'show']);

// get requests
Route::get('/home/land', [App\Http\Controllers\HomeController::class, 'index'])->name('home.land');
Route::get('dash_show/program_show', [App\Http\Controllers\ProgramController::class, 'show'])->name('dash_show/program_show');
Route::get('dash_show/client_show', [App\Http\Controllers\ClientController::class, 'show'])->name('dash_show/client_show');

// Post requests
Route::POST('/client_store', [App\Http\Controllers\ClientController::class, 'Client_store']);
Route::POST('/program_store', [App\Http\Controllers\ProgramController::class, 'program_store']);

//show requests
Route::get('api/clients/{id}', [App\Http\Controllers\Api\ClientApiController::class, 'show']);

//implementing the search request
Route::get('/search', [UserController::class, 'search'])->name('home.land');

// client enrollment
Route::get('dash_show/enrollment_show/{id}', [ClientController::class, 'showEnrollForm'])->name('dash_show.enrollment_show');
Route::post('dash_show/enrollment_show/{id}', [App\Http\Controllers\ClientController::class, 'enrollClientToPrograms'])->name('dash_show/program_show');