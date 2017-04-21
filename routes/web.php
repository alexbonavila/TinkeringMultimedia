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

Route::get('/canvas', function (){
    return view('canvas');
});

Route::get('/svg', function (){
    return view('svg');
});

Route::group(['middleware' => 'auth'], function () {
    Route::get('/d3', function ()    {
        // Uses Auth Middleware
        return view('d3');
    });

    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });

    //Please do not remove this if you want adminlte:route and adminlte:link commands to works correctly.
    #adminlte_routes
    Route::get('thinkeringVideoJS', function ()    {
        $data = [];
        return view('thinkeringVideoJS',$data);
    })->name('thinkeringVideoJS');

    Route::get('thinkeringVideo', function ()    {
        $data = [];
        return view('thinkeringVideo',$data);
    })->name('thinkeringVideo');

});
