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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// my code start

Route::get('hello', function (Request $request) {
  $name = $request->input('name');
  return "Hello Laravel, I am {$name} !";
});

Route::get('students', 'StudentController@index');
Route::post('students', 'StudentController@store');
Route::get('students/{student}', 'StudentController@show');
Route::patch('students/{student}', 'StudentController@update');
Route::delete('students/{student}', 'StudentController@destory');

// Route::resource('students', 'StudentController'); // RESTful

// my code end
