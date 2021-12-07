<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Inboxcontroller;
use App\Http\Controllers\Tiketcontroller;

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
    return view('v_login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dasboard', [App\Http\Controllers\Dasboardcontroller::class, 'index'])->name('dasboard');


Route::resource('inbox', Inboxcontroller::class);

// hak akses untuk admin
Route::group(['middleware'=> 'admin'],function () {

    Route::resource('tiket', Tiketcontroller::class);
});

// hak akses untuk user
Route::group(['middleware'=> 'user'],function () {

    Route::get('/user', [Usercontroller::class, 'index'])->name('user');
});