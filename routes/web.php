<?php

use Illuminate\Support\Facades\Route;

Route::get('/',[
    'as'=> 'front.index',
    function () {
    return view('admin.front.index');
}]);

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

    Route::resource('tags','TagsController')->middleware('auth');
    Route::get('tags/{id}/destroy',[
        'uses' => 'TagsController@destroy',
        'as'    => 'tags.destroy'
        ]);

    Route::resource('articles','TagsController')->middleware('auth');
    Route::get('articles/{id}/destroy',[
        'uses' => 'ArticlesController@destroy',
        'as'    => 'articles.destroy'
        ]);

    Route::resource('images','ImagesController')->middleware('auth');

    Route::resource('articles','ArticlesController')->middleware('auth');

    Route::get('/home', 'HomeController@index')->name('home');
});

Auth::routes(['register' => false]);
