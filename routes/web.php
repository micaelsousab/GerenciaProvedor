<?php

Route::get('/', 'HomeController@index')->name('HomeIndex');

Route::get('/planos', 'PlanoController@index')->name('PlanoIndex');
Route::get('/planos/listagem', 'PlanoController@listarPlanos')->name('PlanoListagem');
Route::post('/planos/store', 'PlanoController@store')->name('PlanoStore');

Route::get('/clientes/create', 'ClienteController@create')->name('ClienteStore');