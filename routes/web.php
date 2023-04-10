<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\jadwalController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\postpaketController;
use App\Http\Controllers\postprodukController;
// use App\Http\Controllers\registrasiController;

// Route::get('/login/login2', [LoginController::class,'/home']);
// Route::post('/login/login2', [LoginController::class,'/home']);


Route::get('/login/login2', [LoginController::class,'index']);
Route::post('/login/login2', [LoginController::class,'authenticate']);


Route::get('/form', [FormulirController::class,'index']);
Route::post('/form/create', [FormulirController::class,'create']);
Route::post('/form/store', [FormulirController::class,'store']);


Route::get('/jadwal', [jadwalController::class,'index']);
Route::get('/jadwal/create', [jadwalController::class,'create']);
Route::post('/jadwal/store', [jadwalController::class,'store']);
Route::get('/jadwal/edit/{id}', [jadwalController::class,'edit']);
Route::post('/jadwal/update/{id}', [jadwalController::class,'update']);
Route::get('/jadwal/destroy/{id}', [jadwalController::class,'destroy']);

Route::get('/postpaket', [postpaketController::class,'index']);
Route::get('/postpaket/create', [postpaketController::class,'create']);
Route::post('/postpaket/store', [postpaketController::class,'store']);
Route::get('/postpaket/destroy/{id}', [postpaketController::class,'destroy']);


Route::get('/postproduk', [postprodukController::class,'index']);
Route::get('/postproduk/create', [postprodukController::class,'create']);
Route::post('/postproduk/store', [postprodukController::class,'store']);
Route::get('/postproduk/destroy/{id}', [postprodukController::class,'destroy']);
// Route::resource('/data-admin', adminController::class);

Route::get('/contact/send', [ContactController::class,'send']);


Route::get('/', function() {
    $title = 'Dashboard';
    $slug = 'dashboard';
    return view('/dashboard',compact('title','slug'));
});

Route::get('/dashboard', function() {
    $title = 'Dashboard';
    $slug = 'dashboard';
    return view('/dashboard',compact('title','slug'));
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('user.home');
});

Route::get('/produk', function () {
    return view('user.produk');
});

Route::get('/paket', function () {
    return view('user.paket');
});

Route::get('/contact', function () {
    return view('contact.contact');
});

Route::get('/form/create', function () {
    return view('form.create');
});

// Route::get('login/login2', function () {
//     return view('/autentikasi.login2');
// });

// Route::get('login/regis', function () {
// return view('/autentikasi.regis');
// });

// Route::get('user/regis', function () {
//     return view('user.regis');
// });

Route::get('/login/login2/register',[registerController::class, 'index']);
Route::post('/login/login2/register',[registerController::class, 'store']);
// Route::resource('/regis', registerController::class);
// Route::get('/login2',[LoginController::class, 'index']);
// Route::post('/login2',[LoginController::class, 'authenticate']);
