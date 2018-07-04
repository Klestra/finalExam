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


//Auth route
Auth::routes();

//Auth route if you are loggin
Route::group(['middleware' => ['auth']], function() {
    //Default route after the loggin
    Route::get('/', 'HomeController@acceuil');
    //Route for logout the user
    Route::get('/logout','HomeController@logout');
    //Route for show the products
    Route::get('/products', 'ProductController@show');
    //Route for delete the product
    Route::post('/delete', 'ProductActionController@delete');
    //Route for insert one product
    Route::get('/products/insert', 'ProductController@insert');
    Route::post('/products/insertAction', 'ProductActionController@insertAction');

});


