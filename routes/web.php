<?php

use App\Http\Controllers\_studentController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route to display the list of students
Route::get('/student', [_studentController::class, 'index'])->name('student.index');

// Route to show the form for creating a new student
Route::get('/student/create', [_studentController::class, 'create'])->name('student.create');

// Route to save the new student record
Route::post('/student', [_studentController::class, 'saveRecord'])->name('student.saveRecord');

// Route to display the dashboard, protected by 'auth' and 'verified' middlewares
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Routes for profile management, protected by 'auth' middleware
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Include the authentication routes
require __DIR__.'/auth.php';
