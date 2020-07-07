<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('layouts/main');
});

Route::get('/categories/{id}',[
	'uses' => 'CategoriesController@categoryAction'
]);

Route::get('/goods/{id}',[
	'uses' => 'GoodsController@showAction'
]);

Route::get('/order/{id}', [
        'uses' => 'OrdersController@buyAction'
]);
Route::get('/order_final', [
        'uses' => 'OrdersController@finishAction'
]);

Route::get('/home', function () {
        return view('layouts/main_all');
});

Route::get('/search/{search}', [
        'uses' => 'SearchController@SearchAction'
]);
Route::get('/cart', [
        'uses' => 'CartController@CartAction'
]);

Route::get('/action_cart', [
        'uses' => 'CartController@CartClear'
]);
Route::get('/home_eng', function () {
        return view('layouts/main_all_eng');
});

Route::get('/login', function(){
        return view('layouts/login');
});
Route::get('/login_final', [
        'uses' => 'LoginController@finishLogin'
]);


Route::get('/register', function(){
        return view('layouts/register');
});
Route::get('/register_final', [
        'uses' => 'RegController@finishReg'
]);

Route::get('/exit', [
        'uses' => 'LoginController@loginExit'
]);