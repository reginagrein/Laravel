<?php

Route::get('/empresas', 'EmpresaController@index')->name('listar_emp');
Route::get('/empresas/create', 'EmpresaController@create');
Route::post('/empresas', 'EmpresaController@store');
Route::get('/empresas/{id}/edit', 'EmpresaController@edit');
Route::put('/empresas/{id}', 'EmpresaController@update');
Route::delete('/empresas/{id}', 'EmpresaController@destroy');

Route::get('/empresas/{empId}/curriculos', 'CurriculoController@index')->name('listar_curriculo');
Route::get('/empresas/{empId}/curriculos/create', 'CurriculoController@create');
Route::post('/empresas/{empId}/curriculos', 'CurriculoController@store');
Route::get('/empresas/{empId}/curriculos/{id}/edit', 'CurriculoController@edit');
Route::put('/empresas/{empId}/curriculos/{id}', 'CurriculoController@update');
Route::delete('/empresas/{empId}/curriculos/{id}', 'CurriculoController@destroy');