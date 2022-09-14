<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TasksController;

Route::group([
    'where' => ['id' => '[0-9]+'],
    'middleware' => 'auth'
], function () {
    Route::get('/', [TasksController::class, 'index'])->name('tasks.index');
    Route::get('/{id}', [TasksController::class, 'show'])->name('tasks.show');
    Route::get('/tasks/add', [TasksController::class, 'add'])->name('tasks.add');
    Route::post('/tasks/add', [TasksController::class, 'store'])->name('tasks.store');
    Route::get('/tasks/edit/{id}', [TasksController::class, 'edit'])->name('tasks.edit');
    Route::post('/tasks/edit/{id}', [TasksController::class, 'update'])->name('tasks.update');
    Route::post('/tasks/delete/{id}', [TasksController::class, 'delete'])->name('tasks.delete');
});

require __DIR__ . '/auth.php';
