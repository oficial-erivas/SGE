<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Equipamento;

class ColaboradorController extends Controller
{
    public function getEquipamentos()
{
    $equipamentos = Equipamento::where('status', 'disponivel')->get();
 
    // Repassando para a view
    return view('perfis.colaborador', compact('equipamentos'));
}
}
