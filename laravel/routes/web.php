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

Route::get('/', 'IndexController@index');

Route::get('/products/{category}/index', [
    'as' => 'product.index',
    'uses' => 'ProductController@index',
    'products' => ['action' => 'index', 'controller' => 'Product']
]);

Route::get('/bsLogin', [
    'as' => 'login.getBSLogin',
    'uses' => 'LoginController@getBSLogin'
]);

Route::post('/bsLogin', [
    'as' => 'login.postLogin',
    'uses' => 'LoginController@postLogin'
]);

//Route::group(['middleware' => 'auth'], function()
//{
    Route::group(['prefix' => 'bs_admin'], function() {
        Route::get('/', function() {
            return view('admin.index');
        });
    });
//});
