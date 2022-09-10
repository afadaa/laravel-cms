<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();
Route::get('/home', 'App\Http\Controllers\HomeController@index');

Route::group(['middleware' => 'auth'], function() {
    Route::resource('users', App\Http\Controllers\UserController::class);

});


Route::resource('beritas', App\Http\Controllers\BeritaController::class);


Route::resource('agendas', App\Http\Controllers\AgendaController::class);


Route::resource('pengumumen', App\Http\Controllers\PengumumanController::class);
