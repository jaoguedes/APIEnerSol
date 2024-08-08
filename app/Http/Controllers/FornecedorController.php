<?php

namespace App\Http\Controllers;
use App\Models\Fornecedor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class FornecedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fornecedores = Fornecedor::all();
        return response()->json($fornecedores, Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomeDoFornecedor' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'potencia' => 'required|numeric',
            'tamanho' => 'required|integer',
        ]);

        $fornecedor = Fornecedor::create($request->all());

        return response()->json($fornecedor, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Fornecedor $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fornecedor = Fornecedor::find($id);

        if ($fornecedor) {
            return response()->json($fornecedor, Response::HTTP_OK);
        } else {
            return response()->json(['message' => 'Fornecedor não encontrado'], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Fornecedor $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nomeDoFornecedor' => 'required|string|max:255',
            'preco' => 'required|numeric',
            'potencia' => 'required|numeric',
            'tamanho' => 'required|integer',
        ]);

        $fornecedor = Fornecedor::find($id);

        if ($fornecedor) {
            $fornecedor->update($request->all());
            return response()->json($fornecedor, Response::HTTP_OK);
        } else {
            return response()->json(['message' => 'Fornecedor não encontrado'], Response::HTTP_NOT_FOUND);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Fornecedor $fornecedor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fornecedor = Fornecedor::find($id);

        if ($fornecedor) {
            $fornecedor->delete();
            return response()->json(null, Response::HTTP_NO_CONTENT);
        } else {
            return response()->json(['message' => 'Fornecedor não encontrado'], Response::HTTP_NOT_FOUND);
        }
    }
}
