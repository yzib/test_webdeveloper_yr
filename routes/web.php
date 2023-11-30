<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\clas_user;
use App\Http\Controllers\data_car;
use App\Http\Controllers\data_loan;
use App\Http\Controllers\data_return;

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
    return view('home', ['title' => '']);
})->name('home');

Route::get('register', [clas_user::class, 'register'])->name('register');
Route::post('register', [clas_user::class, 'store'])->name('register.action');
Route::get('login', [clas_user::class, 'login'])->name('login');
Route::post('login', [clas_user::class, 'login_action'])->name('login.action');

Route::get('logout', [clas_user::class, 'logout'])->name('logout');
Route::get('home', [clas_user::class, 'index'])->name('logout');
Route::get('xhome', [data_car::class, 'index'])->name('logout');
Route::get('xloan', [data_loan::class, 'index'])->name('logout');
Route::get('xreturn', [data_return::class, 'index'])->name('logout');

Route::get('car/tambah_car', [data_car::class, 'baru'])->name('');
Route::post('car/tambah_car', [data_car::class, 'tambah'])->name('');
