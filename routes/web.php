<?php

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

Route::get('/', function () {
    return view('auth.login');
});

Route::resource('cargo','App\Http\Controllers\CargoController');

Route::resource('area','App\Http\Controllers\AreaController');

Route::resource('representante','App\Http\Controllers\RepresentanteController');


Route::middleware(['auth:sanctum','verified'
])->get('/dashboard', function () { return view('dashboard');
    })->name('dashboard');

