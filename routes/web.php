<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StrategyController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::resource('strategy', StrategyController::class);
Route::post('/strategy/{strategy}', [CommentController::class, 'store'])->name('comments.store');

//Route::delete('/strategy/{strategy}', [StrategyController::class,]);
Route::post('/admin/strategies/{id}/toggle', [AdminController::class, 'togglePublishedStatus'])->name('admin.strategies.toggle');
Route::get('/admin/strategies', [AdminController::class, 'index'])
    ->name('admin.strategies');
Route::post('/admin/users/{userId}/toggle-role', [AdminController::class, 'toggleRole'])->name('admin.users.toggleRole');
Route::post('/admin/users/toggleRole/{id}', [AdminController::class, 'toggleRole'])->name('admin.users.toggleRole');

require __DIR__.'/auth.php';
