<?php

use App\Task;

Route::get('/', function ()
{
    return  view('welcome');
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/create', 'TasksController@create');

Route::get('/tasks/{task}/edit', 'TasksController@edit');

Route::patch('/tasks/{task}/edit', 'TasksController@update');

Route::delete('/tasks/{task}/delete', 'TasksController@destroy');

Route::post('/tasks/{task}/comments', 'CommentsController@store');

Route::post('/tasks', 'TasksController@store');

Route::get('/tasks/{task}', 'TasksController@show');