<?php

use App\Task;

Route::get('/', 'TasksController@index')->middleware('auth');

Route::get('/tasks', 'TasksController@index')->middleware('auth');

Route::get('/tasks/create', 'TasksController@create')->middleware('auth');

Route::get('/tasks/{task}/edit', 'TasksController@edit')->middleware('auth');

Route::patch('/tasks/{task}/edit', 'TasksController@update')->middleware('auth');

Route::delete('/tasks/{task}/delete', 'TasksController@destroy')->middleware('auth');

Route::post('/tasks/{task}/comments', 'CommentsController@store')->middleware('auth');

Route::post('/tasks', 'TasksController@store')->middleware('auth');

Route::get('/tasks/{task}', 'TasksController@show')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

