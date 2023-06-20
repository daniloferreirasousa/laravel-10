<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\SupportController;

Route::get('/supports', [SupportController::class, 'index'])->name('supports.index');
Route::get('/supports/create', [SupportController::class, 'create'])->name('supports.create');
Route::post('/supports/create', [SupportController::class, 'store'])->name('supports.store');
Route::get('/supports/{id}/edit', [SupportController::class, 'edit'])->name('supports.edit');
Route::delete('/supports/{id}', [SupportController::class, 'destroy'])->name('supports.destroy');
Route::put('supports/{id}/update', [SupportController::class, 'update'])->name('supports.update');
Route::get('/supports/{id}', [SupportController::class, 'show'])->name('supports.show');