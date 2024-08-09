<?php

namespace App\Http\Controllers;
use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    // Listar todos os orçamentos
    public function index()
    {
        $orcamentos = Orcamento::all();
        return response()->json($orcamentos);
    }

    // Mostrar um orçamento específico
    public function show($id)
    {
        $orcamento = Orcamento::find($id);
        
        if (!$orcamento) {
            return response()->json(['message' => 'Orçamento não encontrado'], 404);
        }

        return response()->json($orcamento);
    }

    // Criar um novo orçamento
    public function store(Request $request)
    {
        $orcamento = Orcamento::create($request->all());
        return response()->json($orcamento, 201);
    }

    // Atualizar um orçamento existente
    public function update(Request $request, $id)
    {
        $orcamento = Orcamento::find($id);

        if (!$orcamento) {
            return response()->json(['message' => 'Orçamento não encontrado'], 404);
        }

        $orcamento->update($request->all());
        return response()->json($orcamento);
    }

    // Deletar um orçamento
    public function destroy($id)
    {
        $orcamento = Orcamento::find($id);

        if (!$orcamento) {
            return response()->json(['message' => 'Orçamento não encontrado'], 404);
        }

        $orcamento->delete();
        return response()->json(['message' => 'Orçamento deletado com sucesso']);
    }
}
