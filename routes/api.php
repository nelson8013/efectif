<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\States;
use App\Models\Lgas;

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



Route::get('states/{country_id}',function($country_id){
    return States::where('country_id', $country_id)->get();
});


Route::get('lga/{state_id}',function($state_id){
    return Lgas::where('state_id', $state_id)->get();
});
