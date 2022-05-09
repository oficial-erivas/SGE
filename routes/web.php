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
    return view('login');
});

Route::get('/colaborador','App\Http\Controllers\ColaboradorController@getEquipamentos');
Route::get('/equipamentos/novo','App\Http\Controllers\EquipamentosController@create');
Route::post('/equipamentos/novo','App\Http\Controllers\EquipamentosController@store')->name('registrar_equipamento');
Route::get('/equipamentos/ver/{id}','App\Http\Controllers\EquipamentosController@show');
Route::get('/equipamentos/editar/{id}','App\Http\Controllers\EquipamentosController@edit');
Route::post('/equipamentos/editar/{id}','App\Http\Controllers\EquipamentosController@update')->name('alterar_equipamento');
Route::get('/equipamentos/excluir/{id}','App\Http\Controllers\EquipamentosController@delete');
Route::post('/equipamentos/excluir/{id}','App\Http\Controllers\EquipamentosController@destroy')->name('excluir_equipamento');
Route::get('/emprestimos/novo/{id}','App\Http\Controllers\EmprestimosController@create')->name('solictar_emprestimo');
Route::post('/emprestimos/novo/{id}','App\Http\Controllers\EmprestimosController@store')->name('criar_emprestimo');