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

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/*Route::post('/hocking-cheek', function (Request $request) {
    return ['message'=> 'Если вас интересуют модульные тесты, то наверное вы хотели бы пройти курс по <a href="#">PHPUnit </a>. Или вам интереснее курс <a href="#">по функциональным тестам</a>?'];
});*/


Route::post('/hocking-cheek', 'CourseController@index')->middleware('cors');
Route::post('/audio-2-text', 'CourseController@audio2text')->middleware('cors');
