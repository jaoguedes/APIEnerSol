<?php

namespace App\Http\Controllers;
use App\Models\Orcamento;
use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    public function index()
    {
        $orcamentos = Orcamento::all();
        return response()->json($orcamentos);
    }

    public function show($id)
    {
        $orcamento = Orcamento::find($id);
        if ($orcamento) {
            return response()->json($orcamento);
        }
        return response()->json(['message' => 'Orçamento não encontrado'], 404);
    }

    public function store(Request $request)
    {
        $request->validate([
            'IdManutencao' => 'required|integer',
            'IdFornecedor' => 'required|integer',
            'descricao' => 'required|string',
            'status' => 'required|string',
            'user_id' => 'required|integer|exists:users,id',
        ]);

        $orcamento = Orcamento::create($request->all());
        return response()->json($orcamento, 201);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'IdManutencao' => 'integer',
            'IdFornecedor' => 'integer',
            'descricao' => 'string',
            'status' => 'string',
            'user_id' => 'integer|exists:users,id',
        ]);

        $orcamento = Orcamento::find($id);
        if ($orcamento) {
            $orcamento->update($request->all());
            return response()->json($orcamento);
        }
        return response()->json(['message' => 'Orçamento não encontrado'], 404);
    }

    public function destroy($id)
    {
        $orcamento = Orcamento::find($id);
        if ($orcamento) {
            $orcamento->delete();
            return response()->json(['message' => 'Orçamento excluído com sucesso']);
        }
        return response()->json(['message' => 'Orçamento não encontrado'], 404);
    }
}
