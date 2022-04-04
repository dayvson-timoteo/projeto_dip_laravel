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

Route::get('/', 'HomeController@home')->name('site.home');

Route::get('/search', 'SearchController@search')->name('site.search');

Route::get('/sobre-nos', 'SobreNosController@sobreNos')->name('site.sobrenos');

Route::get('/login', 'LoginController@login')->name('site.login');


//app
Route::prefix('/app')->group(function(){
    Route::get('/cadastro', 'CadastroController@cadastro')->name('app.cadastro');
});

//fallback
Route::fallback(function(){
    return view('site.home');
});