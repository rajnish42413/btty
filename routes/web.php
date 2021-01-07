<?php

Auth::routes();

Route::get('/', 'LinksController@create');
Route::post('/links', 'LinksController@store');
Route::get('/links/{link}', 'LinksController@show');

Route::get('/all/links', 'LinksController@index');

Route::get('/{hash}', 'LinksController@process');
