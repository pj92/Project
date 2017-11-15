<?php

/*
|--------------------------------------------------------------------------
| Web Routes5
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $tasks = DB::table('tasks')->latest()->get();

    return view('index', compact('tasks'));
});

Route::get('/{task}', function ($id) {
    $tasks = DB::table('tasks')->find($id);


    return view('show', compact('tasks'));
  });