<?php

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

Route::get('/', function () {
    return view('frontend.pages.home');
});
Route::get('/about', function () {
    return view('frontend.pages.about');
});
Route::get('/doctors', function () {
    return view('frontend.pages.doctors');
});
Route::get('/dashboard1', function () {
    return view('backend.layouts.master');
});
Route::get('/dashboard1', function () {
    return view('backend.pages.dashboard_home');
});
Route::get('/dashboard1/students', function () {
    return view('backend.pages.students');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
