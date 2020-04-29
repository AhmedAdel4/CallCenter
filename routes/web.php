<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::group(['namespace' => 'User'], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::post('/', 'HomeController@saveCall')->name('home');
    Route::post('/callUpdate/{id}', 'HomeController@updateCall');
    Route::post('/print', 'HomeController@printPDF');
});

Route::get('/admin','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::get('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');
Route::post('/admin','Auth\AdminLoginController@login')->name('admin.login.submit');

Route::group(['namespace' => 'Admin'], function () {
    
    // Route::get('/admin','AdminController@Home')->name('admin.home');
    Route::resource('/admin/call','CallController');
    Route::resource('/admin/status','StatusController');
    Route::resource('/admin/source','SourceController');
    Route::resource('/admin/employee','EmployeeController');
});




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

