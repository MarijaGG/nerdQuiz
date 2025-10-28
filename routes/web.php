<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

// Redirect guests to login, users to dashboard
Route::get('/', function () {
    return redirect('/dashboard');
});

// Dashboard (requires login)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Profile routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Quiz routes
Route::get('/hsr', function () {
    return redirect()->route('quiz.show', ['id' => 1]);
});

Route::get('/gi', function () {
    return redirect()->route('quiz.show', ['id' => 2]);
});

Route::get('/dino', function () {
    return redirect()->route('quiz.show', ['id' => 3]);
});

Route::get('/fnaf', function () {
    return redirect()->route('quiz.show', ['id' => 4]);
});

Route::get('/jojo', function () {
    return redirect()->route('quiz.show', ['id' => 5]);
});

Route::match(['get', 'post'], '/quiz/{id}', [QuizController::class, 'show'])->name('quiz.show');