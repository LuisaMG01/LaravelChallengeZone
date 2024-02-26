<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChallengeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/challenges', [ChallengeController::class, 'index'])->name('challenge.index');
Route::get('/challenges/{id}', [ChallengeController::class, 'show'])->name('challenge.show');
Route::get('/create/challenge', [ChallengeController::class, 'create'])->name('challenge.create');
Route::post('/save/challenge', [ChallengeController::class, 'save'])->name('challenge.save');
Route::delete('/challenge/{id}', [ChallengeController::class, 'delete'])->name('challenge.delete');
