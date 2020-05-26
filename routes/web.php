<?php

use Illuminate\Support\Facades\Route;

//QUITAR REGISTRO
Auth::routes(['register' => false]);

//ROUTES FRONTEND
Route::get('/',[
    'as'=> 'front.index',
    'uses'=> 'FrontController@index'
]);

Route::get('categories/{name}',[
    'uses' => 'FrontController@searchCategory',
    'as' => 'front.search.category'
]);

Route::get('tags/{name}',[
    'uses' => 'FrontController@searchTag',
    'as' => 'front.search.tag'
]);

Route::get('articles/{slug}',[
    'uses' => 'FrontController@viewArticle',
    'as' => 'front.view.article'
]);

//ROUTES BACKEND

Route::group(['prefix' => 'admin'],function (){

   // Route::get('/', function () {
    //    return view('admin.template.main');
   // });

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

    Route::resource('articles','ArticlesController')->middleware('auth');
    Route::get('articles/{id}/destroy',[
        'uses' => 'ArticlesController@destroy',
        'as'    => 'articles.destroy'
        ]);

    Route::resource('images','ImagesController')->middleware('auth');

    Route::resource('articles','ArticlesController')->middleware('auth');

});
