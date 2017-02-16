<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/findSun/{solarsystem_id}', 'SolarSystemController@findSun');
Route::middleware('auth:api')->get('/findPlanets/sunOrbitingPlanets/', 'PlanetController@findSunOrbitingPlanets');
Route::middleware('auth:api')->get('/findPlanets/bySSId/{solarsystem_id}', 'PlanetController@filterBySolarsystem');

//Searching searchType is either "name" or "size"
Route::middleware('auth:api')->get('/search/sun/{searchType}/{searchText}', 'SunController@search');
Route::middleware('auth:api')->get('/search/planet/{searchType}/{searchText}', 'PlanetController@search');
Route::middleware('auth:api')->get('/search/solarsystem/{searchType}/{searchText}', 'SolarSystemController@search');

