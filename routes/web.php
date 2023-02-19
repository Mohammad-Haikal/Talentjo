<?php

use App\Http\Controllers\ContactController;
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

// Set Language
Route::get('/ar', function () {
    session()->put('lang', 'ar');
    return redirect('/');
});

Route::get('/en', function () {
    session()->put('lang', 'en');
    return redirect('/');
});

Route::get('/', function () {
    if (session('lang') != null && session('lang') == 'en') {
        return view('en');
    } else {
        return view('ar');
    }
});

Route::post('/contact/store', [ContactController::class, 'store']);
