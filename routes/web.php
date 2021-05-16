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






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('coordenador')->group(function (){
	//dashboard routes
	Route::get('/','coordenador\CoordenadorController@index')->name('coordenador.dashboard');
		
	//login routes
	Route::get('/login','Auth\CoordenadorLoginController@showLoginForm')->name('coordenador.login');
	Route::post('/login','Auth\CoordenadorLoginController@login')->name('coordenador.login.submit');
	
	//logout routes
	Route::post('/logout','Auth\CoordenadorLoginController@logout')->name('coordenador.logout');
	
	//Register routes
	//Route::get('/register','Auth\CoordenadorRegisterController@showRegistrationForm')->name('coordenador.register');
	//Route::post('/register','Auth\CoordenadorRegisterController@register')->name('coordenador.register.submit');
	
	
});


Route::prefix('aluno')->group(function (){
	//dashboard routes
	Route::get('/','aluno\AlunoController@index')->name('aluno.dashboard');
	
	Route::post('/login','Auth\AlunoLoginController@login')->name('aluno.login.submit');
	
	
	//login routes
	Route::get('/login','Auth\AlunoLoginController@showLoginForm')->name('aluno.login');
	Route::post('/login','Auth\AlunoLoginController@login')->name('aluno.login.submit');
	
	//logout routes
	Route::post('/logout','Auth\AlunoLoginController@logout')->name('aluno.logout');
	
	//Register routes
	//Route::get('/register','Auth\AlunoRegisterController@showRegistrationForm')->name('aluno.register');
	//Route::post('/register','Auth\AlunoRegisterController@register')->name('aluno.register.submit');
	
	
});

