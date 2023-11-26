<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

Route::get('/', [IndexController::class, 'home'])->name('home');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/project', [IndexController::class, 'project'])->name('project');
Route::get('/project/{id}', [IndexController::class, 'projectById']);
Route::get('/blog/{id}', [IndexController::class, 'blogById']);
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
