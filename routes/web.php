<?php
Route::get('/list', 'BookController@index');
Route::get('/show/{book}', 'BookController@show');
Route::get('/add/{book}', 'BookController@store');
Route::get('/update/{book}', 'BookController@update');
Route::get('/remove/{book}', 'BookController@destroy');
