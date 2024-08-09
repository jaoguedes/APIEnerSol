<?php

namespace App\Http\Controllers;
use App\Models\Placa;
use Illuminate\Http\Request;

class PlacaController extends Controller
{
    // Listar todas as placas
    public function index()
    {
        $placas = Placa::all();
        return response()->json($placas);
    }

    // Exibir uma placa específica
    public function show($id)
    {
        $placa = Placa::find($id);

        if (!$placa) {
            return response()->json(['message' => 'Placa not found'], 404);
        }

        return response()->json($placa);
    }

    // Criar uma nova placa
    public function store(Request $request)
    {
        $request->validate([
            'idUser' => 'required|exists:users,id',
            'idDescricao' => 'required|string|max:255',
        ]);

        $placa = Placa::create($request->all());
        return response()->json($placa, 201);
    }

    // Atualizar uma placa existente
    public function update(Request $request, $id)
    {
        $placa = Placa::find($id);

        if (!$placa) {
            return response()->json(['message' => 'Placa not found'], 404);
        }

        $request->validate([
            'idUser' => 'required|exists:users,id',
            'idDescricao' => 'required|string|max:255',
        ]);

        $placa->update($request->all());
        return response()->json($placa);
    }

    // Excluir uma placa
    public function destroy($id)
    {
        $placa = Placa::find($id);

        if (!$placa) {
            return response()->json(['message' => 'Placa not found'], 404);
        }

        $placa->delete();
        return response()->json(['message' => 'Placa deleted successfully']);
    }
}
