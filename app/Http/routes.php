<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/branch', 'BranchController@index')->name('branch-index');
Route::get('/branch/new', 'BranchController@create')->name('branch-new');
Route::post('/branch/new', 'BranchController@saveCreate');
Route::get('/branch/{id}', 'BranchController@edit')->name('branch-edit');
Route::put('/branch/{id}', 'BranchController@saveEdit');
Route::get('/branch/{id}/delete', 'BranchController@delete')->name('branch-delete');
Route::get('/branch/{id}/restore', 'BranchController@restore')->name('branch-restore');
