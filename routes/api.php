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

Route::group(['prefix' => 'potato'], function() {
    Route::get('technologies', 'TechnologyController@index');
    Route::get('categories', 'CategoryController@index');
    Route::get('skills', 'SkillsController@index');
    Route::resource('user-technologies', 'UserTechnologyController');
});
