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

Route::group(['middleware' => ['web', 'auth', 'admin']], function () {
    //route for admin dashboard page
    Route::get('/dashboard', ['as' => 'dashboard', 'uses' => 'AdminController@index']);
    //route for user pages
    Route::get('/users', ['as' => 'users', 'uses' => 'UserController@index']);
    Route::get('/add-user', ['as' => 'add-user', 'uses' => 'UserController@adduser']);
    Route::post('save-user', ['as' => 'save-user', 'uses' => 'UserController@saveuser']);
    //route for school pages
    Route::get('/school', ['as' => 'school', 'uses' => 'SchoolController@index']);
    Route::get('/add-school', ['as' => 'add-school', 'uses' => 'SchoolController@addschool']);
    Route::post('save-school', ['as' => 'save-school', 'uses' => 'SchoolController@saveschool']);
    Route::get('/assign-school-bus', ['as' => 'assign-school-bus', 'uses' => 'SchoolController@assignschoolbus']);
    Route::post('assign-bus', ['as' => 'assign-bus', 'uses' => 'SchoolController@assignbus']);
    Route::get('/school-bus-list', ['as' => 'school-bus-list', 'uses' => 'SchoolController@schoolbuslist']);
});
Route::group(['middleware' => ['web', 'auth']], function () {
    //route for bus pages
    Route::get('/buses', ['as' => 'buses', 'uses' => 'BusController@index']);
    Route::get('/add-bus', ['as' => 'add-bus', 'uses' => 'BusController@addbus']);
    Route::post('save-bus', ['as' => 'save-bus', 'uses' => 'BusController@savebus']);
    Route::post('deletebus', ['as' => 'deletebus', 'uses' => 'BusController@deletebus']);
    //route for student page
    Route::get('/students', ['as' => 'students', 'uses' => 'StudentController@index']);
    Route::get('/add-student', ['as' => 'add-student', 'uses' => 'StudentController@addstudent']);
    Route::post('save-student', ['as' => 'save-student', 'uses' => 'StudentController@savestudent']);
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//route for verifying user email using token
Route::get('verifyemail/{token}', ['as' => 'verifyemail', 'uses' => 'UserController@verifyemail']);
//route for logout
Route::get('logout', 'Auth\LoginController@logout');
