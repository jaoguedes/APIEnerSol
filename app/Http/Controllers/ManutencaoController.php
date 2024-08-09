<?php

namespace App\Http\Controllers;
use App\Models\Manutencao;
use Illuminate\Http\Request;

class ManutencaoController extends Controller
{
     // Listar todos
     public function index()
     {
         return Manutencao::all();
     }
 
     // Criar novo
     public function store(Request $request)
     {
         $request->validate([
             'nomeDaEquipe' => 'required|string|max:255',
             'preco' => 'required|numeric',
         ]);
 
         $manutencao = Manutencao::create($request->all());
 
         return response()->json($manutencao, 201);
     }
 
     // Mostrar específico
     public function show($id)
     {
         $manutencao = Manutencao::findOrFail($id);
 
         return response()->json($manutencao);
     }
 
     // Atualizar específico
     public function update(Request $request, $id)
     {
         $request->validate([
             'nomeDaEquipe' => 'required|string|max:255',
             'preco' => 'required|numeric',
         ]);
 
         $manutencao = Manutencao::findOrFail($id);
         $manutencao->update($request->all());
 
         return response()->json($manutencao);
     }
 
     // Deletar específico
     public function destroy($id)
     {
         $manutencao = Manutencao::findOrFail($id);
         $manutencao->delete();
 
         return response()->json(null, 204);
     }
}
