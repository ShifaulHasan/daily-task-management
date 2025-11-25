<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Task Routes
Route::prefix('tasks')->group(function () {
    Route::get('/', [TaskController::class, 'index'])->name('tasks.index');
    Route::get('/create', [TaskController::class, 'create'])->name('tasks.create');
    Route::post('/store', [TaskController::class, 'store'])->name('tasks.store');

    Route::get('/{id}/edit', [TaskController::class, 'edit'])->name('tasks.edit');
    Route::post('/{id}/update', [TaskController::class, 'update'])->name('tasks.update');
    Route::get('/{id}/delete', [TaskController::class, 'destroy'])->name('tasks.delete');

    Route::get('/history', [TaskController::class, 'history'])->name('tasks.history');
});
