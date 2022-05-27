<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProdukController;
use App\http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::get('/produks', [ProdukController::class, 'ProdukIndex']);
Route::get('/produk/{id}', [ProdukController::class, 'ProdukData']);
Route::post('/tambah-produk', [ProdukController::class, 'ProdukStore']);
Route::put('/produk-edit/{id}',[ProdukController::class, 'ProdukEdit']);
Route::delete('/produkDelete/{id}', [ProdukController::class,'ProdukDelete']); 

Route::get('/user', [UserController::class, 'UserIndex']);
Route::get('/users/{id}', [UserController::class, 'UserData']);
Route::post('/tambah-user', [UserController::class, 'UserStore']);
Route::put('/edit-user/{id}', [UserController::class, 'UserEdit'] );
Route::delete('/userDelete/{id}', [UserController::class, 'UserDelete']);
