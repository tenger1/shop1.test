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

Route::get('locale/{locale}', 'MainController@changeLocale')->name('locale');

Route::middleware(['set_locale'])->group( function(){
    
    Route::get('/', function () {
    return view('layouts/main_all');
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


Route::get('/cart/{id}', [
        'uses' => 'CartController@addtocartAction'
]);

Route::get('/uncart', [
        'uses' => 'CartController@deletefromcartAction'
]);


Route::get('/action_cart', [
        'uses' => 'CartController@CartClear'
]);

Route::get('/cart2', [
        'uses' => 'CartController2@Cart2Action'
]);

Route::get('/home_eng', function () {
        return view('layouts/main_all_eng');
});

Route::get('/login', function(){
        return view('layouts/login');
});
//Route::get('/login_final', 'LoginController@finishLogin');
Route::post('/login_final','LoginController@finishLogin');


Route::get('/register', function(){
        return view('layouts/register');
});
Route::post('/register_final', [
        'uses' => 'RegController@finishReg'
]);

Route::get('/exit', [
        'uses' => 'LoginController@loginExit'
]);

Route::get('/change', [
        'uses' => 'ChangeController@change'
]);

Route::get('/redactor',[
	'uses' => 'RedactorController@Add'
]);

Route::get('/add_final', [
        'uses' => 'AddController@Addtodb'
]);

Route::get('/delete_by_id', [
        'uses' => 'DeleteController@Deletefromdb'
]);

Route::get('/add_action', [
        'uses' => 'CartController2@AddAction'
]);
Route::get('/delete_all_cart', [
        'uses' => 'CartController2@DeleteAllAction'
]);

Route::get('/cart_continue', [
        'uses' => 'CartController2@CartContinueAction'
]);
Route::get('/search_by_name', [
        'uses' => 'RedactorController@SearchByNameAction'
]);

Route::get('/delivered/{id}', [
        'uses' => 'RedactorController@DeliveredAction'
]);
Route::get('/deliverchange/{id}', [
        'uses' => 'RedactorController@DeliverchangeAction'
]);

Route::get('/deliverchange_final/', [
        'uses' => 'RedactorController@Deliverchange_finalAction'
]);

Route::get('/addcat', [
        'uses' => 'RedactorController@AddCategory'
]);

Route::get('/delcat', [
        'uses' => 'RedactorController@DelCategory'
]);

Route::get('/my_orders', [
        'uses' => 'CartController@MyOrders'
]);

Route::post('/add_image_final', 'AddController@AddImage');


    
});

Route::get('/uploadfile','UploadFileController@index');
Route::post('/uploadfile','UploadFileController@showUploadFile');

Route::get('/image_change','UploadFileController@index2');
Route::post('/image_change','UploadFileController@ChangeImage');

Route::post('/sendemail/send', 'SendEmailController@send');

Route::get('/change_name', [
        'uses' => 'ChangeController@ChangeName'
]);
//Route::get('/change_pass','UploadFileController@index2');
Route::post('/change_pass', 'ChangeController@ChangePass');
