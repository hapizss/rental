<?php

namespace app\http\Controllers;

use App\Http\Controllers\merkcontroller;

use App\Http\Controllers\mobilcontroller;
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

Route::get('/', function () {
    echo "selamat datang di rmh";
});

route::get('/greeting', function () {
    return view('greeting');
});

route::get('/', function () {
    return view('index');
});

route::get('/mobil', [mobilcontroller::class, 'index']);
route::get('/mobil/create', [mobilcontroller::class, 'create']); //untuk memanggil form 
route::post('/mobil/simpandata', [mobilcontroller::class, 'store']); //mengirim request
route::get('/merk', [merkcontroller::class, 'index']);