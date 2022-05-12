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

//id do colaborador
Route::get('/colaborador/equipamentos/{id}','App\Http\Controllers\ColaboradorController@getEquipamentos')->name('ver_equipamentos');
Route::get('/colaborador/emprestimos/{id}','App\Http\Controllers\ColaboradorController@getEmprestimos')->name('ver_emprestimos');

//id do colabResp
Route::get('/colaboradorResp/equipamentos/{id}','App\Http\Controllers\ColaboradorRespController@getEquipamentos')->name('ver_equipamentosR');
Route::get('/colaboradorResp/emprestimos/{id}','App\Http\Controllers\ColaboradorRespController@getEmprestimos')->name('ver_emprestimosR');
Route::get('/colaboradorResp/liberacoes/{id}','App\Http\Controllers\ColaboradorRespController@getLiberacoes')->name('ver_liberacoes');

//id do tecncio
Route::get('/tecnico/equiEntregar/{id}','App\Http\Controllers\TecnicoController@getEquiEntregar')->name('Aentregar_equipamentos');
Route::get('/tecnico/equiRecolher/{id}','App\Http\Controllers\TecnicoController@getEquiRecolher')->name('Arecolher_equipamentos');

//id do equipamento
Route::get('/equipamentos/novo','App\Http\Controllers\EquipamentosController@create');
Route::post('/equipamentos/novo','App\Http\Controllers\EquipamentosController@store')->name('registrar_equipamento');
Route::get('/equipamentos/ver/{id}','App\Http\Controllers\EquipamentosController@show')->name('ver_equipamento');
Route::get('/equipamentos/editar/{id}','App\Http\Controllers\EquipamentosController@edit');
Route::post('/equipamentos/editar/{id}','App\Http\Controllers\EquipamentosController@update')->name('alterar_equipamento');
Route::get('/equipamentos/excluir/{id}','App\Http\Controllers\EquipamentosController@delete');
Route::post('/equipamentos/excluir/{id}','App\Http\Controllers\EquipamentosController@destroy')->name('excluir_equipamento');

//id do emprestimo
Route::get('/emprestimos/{equi_id}/novo/{colab_id}','App\Http\Controllers\EmprestimosController@create')->name('solicitar_emprestimo');
Route::post('/emprestimos/{equi_id}/novo/{colab_id}','App\Http\Controllers\EmprestimosController@store')->name('criar_emprestimo');
Route::get('/emprestimos/ver/{id}','App\Http\Controllers\EmprestimosController@show')->name('ver_emprestimo');
Route::get('/emprestimos/{emp_id}/devolver/{equi_id}','App\Http\Controllers\EmprestimosController@solicitarDevolucao')->name('solicitar_devolucao');
Route::post('/emprestimos/devolver/{id}','App\Http\Controllers\EmprestimosController@devolver')->name('devolver_emprestimo');
Route::get('/emprestimos/liberar/{id}','App\Http\Controllers\EmprestimosController@liberar')->name('liberar_emprestimo');
Route::get('/emprestimos/entregar/{id}','App\Http\Controllers\EmprestimosController@entregar')->name('entregar_emprestimo');
Route::get('/emprestimos/confirmarDevolucao/{id}','App\Http\Controllers\EmprestimosController@confirmarDevolucao')->name('confirmarDevolucao_emprestimo');
Route::post('/emprestimos/avaliar/{id}','App\Http\Controllers\EmprestimosController@avaliar')->name('avaliar_emprestimo');
