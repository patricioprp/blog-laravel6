<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'admin'],function (){

    Route::resource('users','UsersController');
    Route::get('users/{id}/destroy',[
        'uses' => 'UsersController@destroy',
        'as'    => 'users.destroy'
    ]);


});
