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

/* Tests */
Route::redirect('/', 'tests');

Route::get('tests', 'TestController@index')->name('tests.index');

Route::post('tests/store', 'TestController@store')->name('tests.store');

Route::get('tests/create', 'TestController@create')->name('tests.create');

Route::put('tests/{test}', 'TestController@update')->name('tests.update');

Route::get('tests/{test}/edit', 'TestController@edit')->name('tests.edit');

Route::get('tests/{test}', 'TestController@show')->name('tests.show');

Route::delete('tests/{test}/destroy', 'TestController@destroy')->name('tests.destroy');
