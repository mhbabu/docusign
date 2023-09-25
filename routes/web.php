<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentSignController;


Route::get('/', [DocumentSignController::class, 'index'])->name('document.sign');
Route::post('/submit', [DocumentSignController::class, 'submit'])->name('document.submit');
Route::post('upload-multiple-files', [DocumentSignController::class, 'uploadFiles']);