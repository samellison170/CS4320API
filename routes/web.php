<?php
Route::get('/list', 'BookController@index');
Route::get('/add', 'BookController@store');
Route::get('/update', 'BookController@update');
Route::get('/remove', 'BookController@destroy');



