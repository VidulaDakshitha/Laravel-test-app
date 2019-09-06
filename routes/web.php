<?php

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
/*
Route::get('/', function () {
    return view('welcome');
});


Route::get('/search', function () {
    return view('patientManagement.search');

    Route:post('/insert','Controller@insert');

    Route::resource('posts','PostController');
});

*/

Route::get('/', 'patientController@index');
Route::get('/search', 'patientController@search');
Route::get('/register','patientController@register');
Route::get('/showdoc','patientController@showDoctor');
Route::get('/show2','patientController@show');

Route::post('/posts','PostController@store');
//Route::post('/send','SearchController@show');

// Route::resource('post2','SearchController');

Route::resource('doctor','SearchController');
Route::post('/enter','SearchController@store');

Route::resource('post','PostController');
Route::post('/find','SearchController@search');



Route::get('/dashboard','patientController@dashboard');

Route::get('/profile','patientController@userProfile');


Route::resource('check','SampleController');

Route::post('check2','SampleController@search');

Route::post('check3','SearchController@search');

Route::put('/about/{id}', 'SampleController@update');

Route::delete('/about2/{id}', 'SampleController@destroy');



