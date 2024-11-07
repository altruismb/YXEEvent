<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', function () {
    return view('pages.index');
})->name('home');

Route::get('/about', function () {
    return view('pages.about');
})->name('about');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');

Route::get('/all-events', function () {
    return view('pages.all_events');
})->name('all_events');

Route::get('/manage-events', function () {
    return view('pages.manageevents');
})->name('manage_events');

Route::get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/single-event', function () {
    return view('pages.single_event');
})->name('single_event');

Route::get('/signin', function () {
    return view('pages.signin');
})->name('signin');
Route::post('/signin', [AuthController::class, 'login'])->name('signin.post');

Route::get('/signup', function () {
    return view('pages.signup');
})->name('signup');
Route::post('/signup', [AuthController::class, 'register']);


Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/admin/users', [AdminController::class, 'showUsers'])->name('admin.users')->middleware('auth');