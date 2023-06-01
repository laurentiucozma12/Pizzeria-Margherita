<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\MyController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/menu', [MenuController::class, 'index']);

Route::get('/services', [ServicesController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);

Route::get('/contact', [ContactController::class, 'index']);

// Route::resource('/', MyController::class);

Route::get('/store/{category?}/{item?}', function ($category = null, $item = null) {
    if (isset($category)) {
        if (isset($item)) {
            return "you visiting the store for {$category} for {$item}";
        }
        
        return "you visiting the store for {$category}";
    } else {
        return 'you are viewing all intruments';
    }
});