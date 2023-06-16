<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;

use App\Http\Controllers\MenuController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/about', [AboutController::class, 'index'])->name('root.about');
Route::get('/contact', [ContactController::class, 'index'])->name('root.contact');
Route::get('/', [HomeController::class, 'index'])->name('root.home');
Route::get('/services', [ServicesController::class, 'index'])->name('root.services');

Route::resource('menu', MenuController::class);