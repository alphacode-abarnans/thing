<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ThingController;

Route::get('/', [ThingController::class, 'create'])->name('things.create');
Route::post('/store', [ThingController::class, 'store'])->name('things.store');
Route::get('/things', [ThingController::class, 'index'])->name('things.index');
Route::get('/things/{id}/edit', [ThingController::class, 'edit'])->name('things.edit');
Route::post('/things/{id}/update', [ThingController::class, 'update'])->name('things.update');
Route::delete('/things/{id}/delete', [ThingController::class, 'destroy'])->name('things.destroy');
