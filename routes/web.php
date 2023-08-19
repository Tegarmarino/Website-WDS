<?php

use App\Models\product;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/={lang}', function ($lang) {
    App::setLocale($lang);
    return view('home', [
        'products_en' => product::index_en(),
        'products_id' => product::index_id()
    ]);
});

Route::get('/about={lang}', function ($lang) {
    App::setLocale($lang);
    return view('about');
    
});

// Route::get('/tentang/{lang}', function ($lang) {
//     App::setLocale($lang);
//     return view('tentang');
// });

// Route::get('/about', function () {
//     return view('about');
// });