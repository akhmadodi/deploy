<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');

Route::get('countries', 'CountriesController@index');
Route::get('countries/{id}', 'CountriesController@show');

Route::get('provinces', 'ProvincesController@index');
Route::get('provinces/{id}', 'ProvincesController@show');

Route::get('provinces/{id}/cities', 'CitiesController@index');
Route::get('provinces/{province_id}/cities/{id}', 'CitiesController@show');

Route::get('cities/{id}/areas', 'AreasController@index');
Route::get('cities/{city_id}/areas/{id}', 'AreasController@show');

Route::get('customer_categories', 'CustomerCategoriesController@index');
Route::get('customer_categories/{id}', 'CustomerCategoriesController@show');

Route::get('product_categories', 'ProductCategoriesController@index');
Route::get('product_categories/{id}', 'ProductCategoriesController@show');

Route::group(['middleware' => 'auth:api'], function(){
    Route::post('countries', 'CountriesController@create');
    Route::put('countries/{id}', 'CountriesController@update');
    Route::delete('countries/{id}', 'CountriesController@delete');

    Route::post('provinces', 'ProvincesController@create');
    Route::put('provinces/{id}', 'ProvincesController@update');
    Route::delete('provinces/{id}', 'ProvincesController@delete');

    Route::post('provinces/{id}/cities', 'CitiesController@create');
    Route::put('provinces/{province_id}/cities/{id}', 'CitiesController@update');
    Route::delete('provinces/{province_id}/cities/{id}', 'CitiesController@delete');

    Route::post('cities/{id}/areas', 'AreasController@create');
    Route::put('cities/{city_id}/areas/{id}', 'AreasController@update');
    Route::delete('cities/{city_id}/areas/{id}', 'AreasController@delete');

    Route::post('customer_categories', 'CustomerCategoriesController@create');
    Route::put('customer_categories/{id}', 'CustomerCategoriesController@update');
    Route::delete('customer_categories/{id}', 'CustomerCategoriesController@delete');

    Route::post('product_categories', 'ProductCategoriesController@create');
    Route::put('product_categories/{id}', 'ProductCategoriesController@update');
    Route::delete('product_categories/{id}', 'ProductCategoriesController@delete');

    Route::get('bank_accounts', 'BankAccountsController@index');
    Route::get('bank_accounts/{id}', 'BankAccountsController@show');
    Route::post('bank_accounts', 'BankAccountsController@create');
    Route::put('bank_accounts/{id}', 'BankAccountsController@update');
    Route::delete('bank_accounts/{id}', 'BankAccountsController@delete');

    Route::get('pics', 'PicsController@index');
    Route::get('pics/{id}', 'PicsController@show');
    Route::post('pics', 'PicsController@create');
    Route::put('pics/{id}', 'PicsController@update');
    Route::delete('pics/{id}', 'PicsController@delete');

    Route::get('customers', 'CustomersController@index');
    Route::get('customers/{id}', 'CustomersController@show');
    Route::post('customers', 'CustomersController@create');
    Route::put('customers/{id}', 'CustomersController@update');
    Route::delete('customers/{id}', 'CustomersController@delete');
});
