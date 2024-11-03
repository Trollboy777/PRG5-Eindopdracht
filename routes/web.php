<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return redirect()->route('strategy.index');
});



Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [UserController::class, 'showDashboard'])->name('dashboard');
    Route::post('/dashboard', [UserController::class, 'updateProfile'])->name('dashboard.update');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::resource('strategy', StrategyController::class);
Route::post('/strategy/{strategy}', [CommentController::class, 'store'])->name('comments.store');


Route::post('/admin/strategies/{id}/toggle', [AdminController::class, 'togglePublishedStatus'])->name('admin.strategies.toggle');
Route::get('/admin/strategies', [AdminController::class, 'index'])
    ->name('admin.strategies');
Route::post('/admin/users/{userId}/toggle-role', [AdminController::class, 'toggleRole'])->name('admin.users.toggleRole');
Route::post('/admin/users/toggleRole/{id}', [AdminController::class, 'toggleRole'])->name('admin.users.toggleRole');

require __DIR__.'/auth.php';
