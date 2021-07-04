<?php

use App\Http\Controllers\PengurusController;
use App\Http\Controllers\ProgramKerjaController;
use App\Http\Controllers\RolePengurusController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\InventarisController;
use App\Http\Controllers\KeuanganController;
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

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/inggris', function () {
    return view('inggris');
});

Route::get('/komputer', function () {
    return view('komputer');
});

Route::get('/musik', function () {
    return view('musik');
});
Route::get('/kober', function () {
    return view('kober');
});
Route::get('/taekwondo', function () {
    return view('taekwondo');
});
Route::get('/karate', function () {
    return view('karate');
});
Route::get('/personalia', function () {
    return view('personalia');
});
Route::get('/paketa', function () {
    return view('paketa');
});
Route::get('/paketb', function () {
    return view('paketb');
});
Route::get('/paketc', function () {
    return view('paketc');
});
Route::get('/pkk', function () {
    return view('pkk');
});
Route::get('/tkceria', function () {
    return view('tkceria');
});
Route::get('/kesehatan', function () {
    return view('kesehatan');
});
Route::get('/narwastu', function () {
    return view('narwastu');
});
Route::get('/pemberdayaan', function () {
    return view('pemberdayaan');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

//Register
Route::get('/dataregister', 'App\Http\Controllers\Auth\RegisterController@index');

//Pengurus
Route::get('/datapengurus', [PengurusController::class, 'index']);
Route::get('/datapengurus/{id}', [PengurusController::class, 'details']);
Route::post('/datapengurus/update', [PengurusController::class, 'update']);
Route::post('/datapengurus/store', [PengurusController::class, 'store']);
Route::delete('/datapengurus/delete/{id}', [PengurusController::class, 'delete']);

//program kerja
Route::get('/dataproker', [ProgramKerjaController::class, 'index']);
Route::get('/dataproker/{id}', [ProgramKerjaController::class, 'details']);
Route::post('/dataproker/update', [ProgramKerjaController::class, 'update']);
Route::post('/dataproker/store', [ProgramKerjaController::class, 'store']);
Route::delete('/dataproker/delete/{id}', [ProgramKerjaController::class, 'delete']);

//Asset
Route::get('/dataasset', [AssetController::class, 'index']);
Route::get('/dataasset/{id}', [AssetController::class, 'details']);
Route::post('/dataasset/update', [AssetController::class, 'update']);
Route::post('/dataasset/store', [AssetController::class, 'store']);
Route::delete('/dataasset/delete/{id}', [AssetController::class, 'delete']);

//Inventaris
Route::get('/datainventaris', [InventarisController::class, 'index']);
Route::get('/datainventaris/{id}', [InventarisController::class, 'details']);
Route::post('/datainventaris/update', [InventarisController::class, 'update']);
Route::post('/datainventaris/store', [InventarisController::class, 'store']);
Route::delete('/datainventaris/delete/{id}', [InventarisController::class, 'delete']);

//Keuangan
Route::get('/datakeuangan', [KeuanganController::class, 'index']);
Route::get('/datakeuangan/{id}', [KeuanganController::class, 'details']);
Route::post('/datakeuangan/update', [KeuanganController::class, 'update']);
Route::post('/datakeuangan/store', [KeuanganController::class, 'store']);
Route::delete('/datakeuangan/delete/{id}', [KeuanganController::class, 'delete']);

//role
Route::get('/datarole', [RolePengurusController::class, 'index']);
Route::post('/datarole/store', [RolePengurusController::class, 'store']);
Route::delete('/datarole/delete/{id}', [RolePengurusController::class, 'delete']);


Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::get('upgrade', function () {return view('pages.upgrade');})->name('upgrade');
	Route::get('map', function () {return view('pages.maps');})->name('map');
	Route::get('icons', function () {return view('pages.icons');})->name('icons');
//    Route::get('organisasi', function () {return view('pages.organisasi');})->name('organisasi');
    // Route::get('proker', function () {return view('pages.proker');})->name('proker');
    Route::get('asset', function () {return view('pages.asset');})->name('asset');
    Route::get('inventaris', function () {return view('pages.inventaris');})->name('inventaris');
    Route::get('keuangan',function() {return view('pages.keuangan');})->name('keuangan');
	Route::get('table-list', function () {return view('pages.tables');})->name('table');
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
});
