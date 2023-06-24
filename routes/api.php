<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
// Route::put('country/{country}','App\Http\Controllers\CountryController@countryUpdate');
// Route::delete('country/{country}','App\Http\Controllers\CountryController@countryDelete');
// Route::post('country','App\Http\Controllers\CountryController@countrySave');
// Route::get('country/{id}','App\Http\Controllers\CountryController@countryByID');
// Route::get('country','App\Http\Controllers\CountryController@country');
Route::apiResource('country','App\Http\Controllers\Country');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
