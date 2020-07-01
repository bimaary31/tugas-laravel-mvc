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
    return view('welcome');
});
route::get( '/halo','Registercontroller@halo');

route::get( '/form','Registercontroller@form');

route::get( '/selamat_datang', 'Registercontroller@selamat_datang');
route::post( '/selamat_datang', 'Registercontroller@selamat_datang_post');