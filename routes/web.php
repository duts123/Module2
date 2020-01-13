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


Route::get('/','loginController@index')->name('login');

Route::get('/manageUsers','manageUsersController@manageUsers')->name('manageUsers');

Route::get('/manageTenants','manageUsersController@manageTenants')->name('manageTenants');

Route::get('/tenantForm','manageUsersController@tenantForm')->name('tenantForm');

Route::post('/addTenant','manageUsersController@addTenant')->name('addTenant');

Route::post('/deactivateUser','manageUsersController@deactivateUser')->name('deactivateUser');

Route::post('/activateUser','manageUsersController@activateUser')->name('activateUser');
