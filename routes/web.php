<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h4>About Page</h4>';
});

Route::get('/store', function () {
    $category = request('category');

    if (isset($category)) {    
        // aici fiecare categorie o sa aiba pagina proprie, ex pagina de pizza, pagina de bauturi, etc.
        return 'you visiting the store for ' . strip_tags($category);
    } else {
        // aici o sa fac sa apara toate categoriile din meniu, Pizza, Bauturi, etc.
        return 'you are viewing all intruments';
    }

});


