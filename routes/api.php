<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('lihat-produk', 'ProdukController@ProdukIndex')->name('produk.index');
Route::get('lihat-produk/{id}', 'ProdukController@ProdukData')->name('produk.id');
Route::post('tambah-produk', 'ProdukController@ProdukStore')->name('produk.store');
Route::put('edit-produk/{id}',  'ProdukController@ProdukEdit')->name('produk.edit');
Route::delete('hapus-produk/{id}',  'ProdukController@ProdukDelete')->name('produk.delete');