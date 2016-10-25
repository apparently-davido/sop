<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', array(
    'uses' => 'SopController@getIndex',
    'as' => 'sop.index'
));

Route::get('/signup', array(
    'uses' => 'UserController@getSignUp',
    'as' => 'user.signup'
));

Route::post('/signup', array(
    'uses' => 'UserController@postSignUp',
    'as' => 'user.signup'
));


Route::get('/signin', array(
    'uses' => 'UserController@getSignIn',
    'as' => 'user.signin'
));

Route::post('/signin', array(
    'uses' => 'UserController@postSignIn',
    'as' => 'user.signin'
));

Route::get('/user/profile',array(
   'uses' => 'UserController@getProfile',
    'as' =>'user.profile'
));