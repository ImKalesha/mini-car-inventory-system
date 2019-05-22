<?php

use App\Manufacturer;

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
Route::get('/{any}', function(){
    return view('welcome');
})->where('any', '.*');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/models', function () {
    return view('model');
});

Route::get('/inventory', function () {
    return view('inventory');
});

