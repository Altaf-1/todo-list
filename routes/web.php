<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('work.index');
});

Auth::routes(['verify' => true]);
Route::resource('/work', 'MaggiesController',
    ['names' =>[
        'index'=>'work.index',
        'create'=>'work.create',
        'store'=>'work.store',
        'edit'=>'work.edit',
        'update'=>'work.update',
        'show'=>'work.show',
        'destroy'=>'work.destroy'
    ]]);

Route::get('/home', 'HomeController@index')->name('home');