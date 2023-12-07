<?php
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\clas_user;
use App\Http\Controllers\data_car;
use App\Http\Controllers\data_loan;
use App\Http\Controllers\data_return;
use App\Helpers;
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
    return view('app4', ['title' => '']);
})->name('home'); 
Route::post('regist', [clas_user::class, 'regiss'])->name('register_action');
Route::get('login', [clas_user::class, 'login'])->name('login');
Route::post('login', [clas_user::class, 'login_action'])->name('login.action');
Route::get('logout', [clas_user::class, 'logout'])->name('logout');

Route::get('home', [clas_user::class, 'index'])->name('logout');

Route::get('car_setup', [data_car::class, 'index'])->name('Car Home');
Route::get('car/tambah_car', [data_car::class, 'index'])->name('car.add'); //insert data car baru
Route::post('car/tambah_car2', [data_car::class, 'tambah'])->name('carAdd.action');
Route::get('car/put/{id}', [data_car::class, 'edit'])->name('car.edit'); //edit data car
Route::post('car/save_car', [data_car::class, 'update'])->name('carEdit.action'); //simpan data car


Route::get('loan', [data_loan::class, 'index'])->name('Loan Home');
Route::get('/loan/getCar/{tgl}', [data_loan::class, 'CarSelect'])->name('SelectCarList');
Route::post('/loan/getCarById', [data_loan::class, 'getCarById'])->name('getCarById');
Route::post('/loan/tambah2', [data_loan::class, 'tambah'])->name('loanAdd.Action');
Route::get('/loan/put/{id}', [data_loan::class, 'edit'])->name('loanAdd.Action');

Route::get('return', [data_return::class, 'index'])->name('logout');
Route::get('/return/getCar/{id}', [data_return::class, 'CarSelect'])->name('SelectLoanList');
Route::post('/return/getCarById', [data_return::class, 'getCarById'])->name('getLoanById');
Route::post('/return/tambah2', [data_return::class, 'tambah'])->name('returnAdd.Action');
Route::get('/return/put/{id}', [data_return::class, 'edit'])->name('loanAdd.Action');

//Route::get('car/destroy/{id}', [data_car::class, 'edit'])->name('car.edit');

