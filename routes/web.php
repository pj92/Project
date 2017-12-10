<?php

use App\Task;

Route::get('/', function ()
{
    return  view('welcome');
});

Route::get('/tasks', 'TasksController@index');

Route::get('/tasks/{task}', 'TasksController@show');