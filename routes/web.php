<?php

Route::get('/', 'LinksController@index')->name('index'); 
Route::post('/shorten', 'LinksController@shorten')->name('shorten');
Route::get('/{link}', 'LinksController@fetchLink')->name('fetch');
