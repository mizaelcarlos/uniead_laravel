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
	
	Route::get('/atividades','aluno\AlunoController@atividades')->name('aluno.atividades');
	Route::get('/atividades','aluno\AlunoController@atividades')->name('aluno.atividades');
});

Route::prefix('atividade')->group(function (){
	//dashboard routes
	Route::get('/','atividade\AtividadeController@index')->name('atividade.index');
	Route::get('/vincular_atividade_aluno','atividade\AtividadeController@vincularAtividadeAluno')->name('atividade.vincular_atividade_aluno');
	Route::get('/nova','atividade\AtividadeController@nova')->name('atividade.nova');
	Route::post('/cadastrar','atividade\AtividadeController@cadastrar')->name('atividade.cadastrar');
	Route::get('/vincular_aluno/{atividade}','atividade\AtividadeController@vincularAluno')->name('atividade.vincular_aluno');
	Route::post('/vincula_aluno','atividade\AtividadeController@vinculaAluno')->name('atividade.vincula_aluno');
		
		
	
	
});

