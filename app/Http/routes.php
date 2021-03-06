<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
 */
Route::get('foo', 'FooController@foo');

Route::get('/', 'WelcomeController@index'); 

Route::get('/contact', 'WelcomeController@contact');

Route::resource('articles', 'ArticlesController');

Route::get('tags/{tags}', 'TagsController@show');

Route::controllers ([
  'auth' => 'Auth\AuthController',
  'password' => 'Auth\PasswordController',
]);

Route::get('bar', ['middleware' => 'manager', function() {

  return 'page only for manager';

}]);

