<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controller\AdminController;
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


Route::get("/", 'App\Http\Controllers\HomeController@index');

Route::get("/users", 'App\Http\Controllers\AdminController@user');

Route::get("/deleteuser/{id}", 'App\Http\Controllers\AdminController@deleteuser');

Route::post("/reservation", 'App\Http\Controllers\AdminController@reservation');

Route::get("/viewreservation", 'App\Http\Controllers\AdminController@viewreservation');

Route::get("/redirects",'App\Http\Controllers\HomeController@redirects');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
