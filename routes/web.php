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
    return view('welcome');
});

Route::get('/test', function () {
    
    return view('test');
});



//Auth::routes();

Route::get('/home',[HomeController::class,'index'])->name('home');

Route::resource('libros', LibroController::class);

//Ejemplo de route namespace

Route::namespace('Front')->group(function(){

    Route::get('/',  LibroController::class);

});


//Ejemplo de prefix
Route::prefix('user')->group(function(){

    Route::get('/inicio', 'ProductosController@index');

    Route::get('/crear', 'ProductosController@create');


    Route::get('/actualizar', 'ProductosController@update');


    Route::get('/insert', 'ProductosController@store');


    Route::get('/delete', 'ProductosController@destroy');
});

// or  example
Route::group(['prefix'=>'user','middleware'=>'auth'],function(){

    Route::get('/inicio', 'ProductosController@index');

    Route::get('/crear', 'ProductosController@create');


    Route::get('/actualizar', 'ProductosController@update');


    Route::get('/insert', 'ProductosController@store');


    Route::get('/delete', 'ProductosController@destroy');
});
