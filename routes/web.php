<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\QuizResultController;
use App\Http\Controllers\UserQuizController;

// Halaman depan
Route::view('/', 'welcome');

// Autentikasi Laravel UI
Auth::routes();

// Dashboard user biasa
Route::view('/home', 'home')->name('home');

// Halaman statis
Route::view('/kontak', 'kontak')->name('kontak');
Route::view('/materi', 'materi')->name('materi');
Route::view('/simulasi', 'simulasi')->name('simulasi');
Route::view('/p2tl', 'p2tl')->name('p2tl');
Route::view('/bilman/catatmeter', 'catatmeter')->name('catatmeter');
Route::view('/bilman/prabayar', 'prabayar')->name('prabayar');
Route::view('/bilman/pascabayar', 'pascabayar')->name('pascabayar');
Route::view('/tunggakan', 'tunggakan')->name('tunggakan');
Route::view('/profil', 'profil')->name('profil');

// Rute untuk admin
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');

    // CRUD Soal Kuiz
    Route::resource('quiz', QuizController::class)->except(['show']);

    // Lihat hasil kuiz
    Route::get('/quiz-results', [QuizResultController::class, 'index'])->name('quiz.results');
    Route::delete('/quiz-results/{id}', [QuizResultController::class, 'destroy'])->name('quiz.results.delete');
});

// Rute untuk user (mengerjakan kuiz)
Route::middleware(['auth'])->group(function () {
    Route::get('/kuiz', [UserQuizController::class, 'index'])->name('kuiz.index');
    Route::post('/kuiz', [UserQuizController::class, 'submit'])->name('kuiz.submit');
    Route::get('/hasil-kuiz', [UserQuizController::class, 'result'])->name('kuiz.result');
});
