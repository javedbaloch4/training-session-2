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

Route::get('/', function () {
    return view('welcome');
});

Route::group(array('prefix' => 'clients'), function()
{
    Route::get('{name}', function ($name) {
        return "<h1>Client is : ".$name." </h1>";
    });

    Route::get('{name}/detail', function ($name) {
        return view('clients.detail',compact('name'));
    });

    Route::get('/', function () {

        $clients = ['fakhar','khan','ali','usama','ishfaq'];
        return view('clients.index',compact('clients'));
    });

});


Route::get('/about', function () {
    return "<h1>About Page</h1>";
});

//Route::post
//Route::put
//Route::delete
