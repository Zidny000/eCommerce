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

Route::get('/','RouteController@index' ) ;

Route::get('/index' ,'RouteController@index');
Route::get('{type}/store' ,'RouteController@store');
Route::get('/search' ,'RouteController@stores');
Route::get('{id}/product' ,'RouteController@product');
Route::get('/contacts' ,'RouteController@contacts');
Route::get('/checkout' ,'RouteController@checkout');
Route::get('/favorites' ,'RouteController@favorites');
Route::post('/user/register','UserController@userregister');
Route::post('/user/login','UserController@userlogin');
Route::get('/user/logout' ,'UserController@logout');
Route::post('/password/reset','UserController@reset');
Route::post('/entry','ProductController@entry');
Route::post('/user/comments','ProductController@addComment');


Route::get('{id}/cart/addCart' ,'FavCartController@addCart');
Route::get('{id}/cart/deleteCart' ,'FavCartController@deleteCart');
Route::post('order/confirm','OrderController@confirm');
Route::post('user/message','UserController@message');





//Admin


Route::group(['prefix' => 'admin'] , function(){



    Route::group(['middleware' => 'modAuth'],function(){


    Route::get('/showProduct', 'AdminRouteController@adminproduct');
    Route::get('/product_add','AdminRouteController@product_add');
    Route::get('/product_detail', 'AdminRouteController@product_detail');
    Route::get('/product_order','AdminRouteController@product_order');
    Route::get('/adminDashboard','AdminRouteController@adminDashboard');
    Route::get('{id}/product_update','AdminRouteController@product_update');
    Route::get('/question','AdminRouteController@question');

    Route::post('/addProduct','AdminProductController@addProduct');
    Route::post('{id}/update_confirm','AdminProductController@update');

    Route::get('{id}/delete','AdminProductController@delete')->middleware('adminAuth');
    Route::post('/roleChange','AdminController@roleChange')->middleware('adminAuth');

    Route::get('/logout','AdminController@logout');
    Route::get('/{id}/order/delete','OrderController@deleteOrder');

    Route::get('{id}/order_update','AdminRouteController@order_update_show');
    Route::post('{id}/order_update_confirm','OrderController@order_update');
    Route::post('{id}/order/{product_id}/product/update','OrderController@order_product_update');
    Route::get('{id}/order/{product_id}/product/delete','OrderController@order_product_delete');
    Route::post('{id}/statusChange','OrderController@statusChange');
    Route::get('{id}/message/delete','UserController@messageDelete');



    });





});








