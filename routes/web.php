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
    return view('welcome');
});
Route::group(['prefix'=>'admin','middleware'=>'adminValidate'],function (){
    Route::group(['prefix'=> 'role'],function (){
       Route::get('view','RoleController@getList');

       Route::get('edit/{id}','RoleController@getEdit');
       Route::post('edit/{id}','RoleController@postEdit');

       Route::get('add','RoleController@getAdd');
       Route::post('add','RoleController@postAdd');

       Route::get('delete/{id}','RoleController@getDelete');
    });

    Route::group(['prefix'=> 'user'],function (){
        Route::get('view','UserController@getList');

        Route::get('add','UserController@getAdd');
        Route::post('add','UserController@postAdd');

        Route::get('edit/{id}','UserController@getEdit');
        Route::post('edit/{id}','UserController@postEdit');

        Route::get('delete/{id}','UserController@getDelete');
    });

    Route::group(['prefix'=> 'location'],function (){
        Route::get('view','LocationController@getList');

        Route::get('add','LocationController@getAdd');
        Route::post('add','LocationController@postAdd');

        Route::get('edit/{id}','LocationController@getEdit');
        Route::post('edit/{id}','LocationController@postEdit');

        Route::get('delete/{id}','LocationController@getDelete');
    });

    Route::group(['prefix'=> 'manufacture'],function (){
        Route::get('view','ManufactureController@getList');

        Route::get('add','ManufactureController@getAdd');
        Route::post('add','ManufactureController@postAdd');

        Route::get('edit/{id}','ManufactureController@getEdit');
        Route::post('edit/{id}','ManufactureController@postEdit');

        Route::get('delete/{id}','ManufactureController@getDelete');
    });

    Route::group(['prefix'=> 'review'],function (){
        Route::get('view','ReviewController@getList');
    });

    Route::group(['prefix'=> 'typeproduct'],function (){
        Route::get('view','TypeProductController@getList');

        Route::get('add','TypeProductController@getAdd');
        Route::post('add','TypeProductController@postAdd');

        Route::get('edit/{id}','TypeProductController@getEdit');
        Route::post('edit/{id}','TypeProductController@postEdit');

        Route::get('delete/{id}','TypeProductController@getDelete');
    });

    Route::group(['prefix'=> 'product'],function (){
        Route::get('view','ProductController@getList');

        Route::get('add','ProductController@getAdd');
        Route::post('add','ProductController@postAdd');

        Route::get('edit/{id}','ProductController@getEdit');
        Route::post('edit/{id}','ProductController@postEdit');

        Route::get('delete/{id}','ProductController@getDelete');
    });

    Route::group(['prefix'=> 'paymenttype'],function (){
        Route::get('view','PaymentTypeController@getList');

        Route::get('add','PaymentTypeController@getAdd');
        Route::post('add','PaymentTypeController@postAdd');

        Route::get('edit/{id}','PaymentTypeController@getEdit');
        Route::post('edit/{id}','PaymentTypeController@postEdit');

        Route::get('delete/{id}','PaymentTypeController@getDelete');
    });

    Route::group(['prefix'=> 'payment'],function (){
        Route::get('view','PaymentController@getList');

    });
    Route::group(['prefix'=> 'booking'],function (){
        Route::get('view','BookingController@getList');

    });

    Route::group(['prefix'=> 'home'],function (){
        Route::get('view','HomeController@getList');

    });

});
    Route::get('home','ClientController@getList');

    Route::get('login','ClientController@getLogin');
    Route::post('login','ClientController@postLogin');
    Route::post('register','ClientController@postRegister');

    Route::get('logout','ClientController@getLogout');

Route::group(['prefix'=> 'email'],function (){
    Route::get('active/{id}','ClientController@getActiveSuccess');

});

    Route::get('user','ClientController@getUser');
    Route::post('user','ClientController@postUser');

    Route::get('listproduct','ClientController@getListProduct');
    Route::get('listdetail/{id}','ClientController@getListDetail');

    Route::post('comment/{id}','ClientController@postComment');

    Route::get('about','ClientController@getAbout');

    Route::get('contactus','ClientController@getContactus');
    Route::post('contactus','ClientController@postContactus');

    Route::get('search','ClientController@getSearch');

    Route::get('checkout/{id}','ClientController@getCheckout');
    Route::post('checkout/{id}','ClientController@postCheckout');



