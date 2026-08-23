<?php

use App\Http\Controllers\LlmsTxtController;
use Illuminate\Support\Facades\Route;

Route::get('/llms.txt', [LlmsTxtController::class, 'index'])->name('llms-txt');
Route::get('/llms-full.txt', [LlmsTxtController::class, 'full'])->name('llms-full-txt');
