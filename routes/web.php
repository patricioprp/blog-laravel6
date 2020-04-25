<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function (){

    Route::resource('users','UsersController')->middleware('auth');
    Route::get('users/{id}/destroy',[
        'uses' => 'UsersController@destroy',
        'as'    => 'users.destroy'
    ]);

    Route::resource('categories','CategoriesController')->middleware('auth');
    Route::get('categories/{id}/destroy',[
        'uses' => 'CategoriesController@destroy',
        'as'    => 'categories.destroy'
        ]);

    Route::get('/home', 'HomeController@index')->name('home');



});

Auth::routes(['register' => false]);
