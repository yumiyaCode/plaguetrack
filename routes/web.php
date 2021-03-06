<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\SubdistrictController;
use App\Http\Controllers\RwController;
use App\Http\Controllers\TrackController;
use App\Http\Controllers\frontController;
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

Route::get('/', [frontController::class, 'index']);
Route::group(['prefix' => 'detail'], function(){
	Route::get('/{prov}', [frontController::class, 'singleCity']);
	Route::get('/{prov}/{city}', [frontController::class, 'singleDist']);
});



Auth::routes();

Route::group(['prefix' => 'admin', 'middleware'=>['auth']], function (){
	Route::get('/', function(){
		return view('admin.index');
	});

	Route::resource('/province', ProvinceController::class);

	Route::resource('/city', CityController::class);

	Route::resource('/district', DistrictController::class);

	Route::resource('/subdistrict', SubdistrictController::class);

	Route::resource('/rw', RwController::class);

	Route::resource('/local', TrackController::class);


	Route::get('/global', function(){
		return view('admin.globalCase.index');
	});

	
});