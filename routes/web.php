<?php

Route::get('/', 'HomeController@index')->name('HomeIndex');

Route::get('/planos', 'PlanoController@index')->name('PlanoIndex');
Route::post('/planoStore', 'PlanoController@store')->name('PlanoStore');