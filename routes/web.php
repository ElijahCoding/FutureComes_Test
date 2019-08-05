<?php

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'HomeController@index')->name('home');

    Route::get('/article/{article}', 'ArticleController@show')->name('article.show');
    Route::get('/user/{article}', 'UserController@show')->name('user.show');
});
