<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Instructor\InstructorController;
use Illuminate\Support\Facades\Auth;

// Auth Routes
Route::get('/login', [InstructorController::class, 'showLoginForm'])->name('login');
Route::post('/login', [InstructorController::class, 'login']);
Route::post('/logout', [InstructorController::class, 'logout'])->name('logout');

// Protected Routes for Instructors
Route::middleware(['auth'])->group(function () {
    // Dashboard
    Route::get('/instructor/dashboard', [InstructorController::class, 'index'])->name('instructor.dashboard');

    // Home - Redirect to dashboard as they might be the same
    Route::get('/', function () {
        return redirect()->route('instructor.dashboard');
    })->name('instructor.home');

    // Profile
    Route::get('/instructor/profile', [InstructorController::class, 'profile'])->name('instructor.profile');
    
    // Add more protected routes for instructors here...
});

// Add more public routes here if needed...
