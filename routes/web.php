<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',                     // 로그인 여부 체크
    config('jetstream.auth_session'),   // 세션이 유효성 체크
    'verified',                         // 이메일 인증 체크
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/chat', function () {
        return view('chat');
    })->name('chat');
});

Route::get('/contact', function() {
    return view('contact');
})->name('contact');

Route::get('/mindcare', function() {
    return view('company');
})->name('mindcare');

Route::get('/faq', function() {
    return view('faq');
})->name('faq');