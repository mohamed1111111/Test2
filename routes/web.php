<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Route::get('/projects/{project}/edit', 'ProjectsController@edit' );
//
//Route::get('/projects/create', 'ProjectsController@create' );
//Route::delete('/projects/{project}', 'ProjectsController@destroy' );

route::resource('projects','ProjectsController')->middleware('can:view,project');
route::post('/projects/{project}/task','ProjectTasksController@store');

route::patch('/task/{task}','ProjectTasksController@update');

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/projects', 'ProjectsController@index' );
//Route::post('/projects', 'ProjectsController@store' );
//Route::get('/projects/{project}', 'ProjectsController@show' );
//Route::patch('/projects/{project}', 'ProjectsController@update' );
//Route::delete('/projects/{project}', 'ProjectsController@destroy' );



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
