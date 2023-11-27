<?php

use App\Http\Controllers\controlerPrincipal;
use App\Http\Controllers\ControllerPaquetes;
use App\Http\Controllers\userController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/buscar/{id}', [ControllerVehiculos::class, 'buscar'])->name('buscar');
// Route::get('/opcion1', [controlerPrincipal::class, 'opcion1'])->name('opcion1');
// Route::get('/opcion2', [controlerPrincipal::class, 'opcion2'])->name('opcion2');
// Route::resource('/index', controlerPrincipal::class);
//xssxss
Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/p1', function () {
    return view('/planes/p1');
});

Route::get('/p2', function () {
    return view('/planes/p2');
});

Route::get('/p3', function () {
    return view('/planes/p3');
});

Route::get('/p4', function () {
    return view('/planes/p4');
});

Route::get('/p5', function () {
    return view('/planes/p5');
});

Route::get('/shop', function () {
    return view('shop');
});

Route::resource('admin', ControllerPaquetes::class);




