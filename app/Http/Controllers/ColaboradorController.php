<?php

namespace App\Http\Controllers;

use App\Models\Colaborador;
use Illuminate\Http\Request;
use App\Models\Equipamento;

class ColaboradorController extends Controller
{
  //Falta CRUD

    public function getEquipamentos($id)// $id do colab
{
    $equipamentos = Equipamento::where('status', 'disponivel')->get();
    $colaborador= Colaborador::findOrFail($id);
    // Repassando para a view
    return view('perfis.colaborador', ['colaborador' => $colaborador],compact('equipamentos'));
}
}
