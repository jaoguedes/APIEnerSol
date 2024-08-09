<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orcamento extends Model
{
    use HasFactory;

    // Definindo a tabela associada ao modelo
    protected $table = 'orcamentos';

    // Definindo quais atributos podem ser atribuídos em massa
    protected $fillable = [
        'usuario_id',
        'fornecedor_id',
        'manutencao_id',
        'descricao',
        'status',
    ];

    // Definindo as relações
    public function usuario()
    {
        return $this->belongsTo(Usuario::class, 'usuario_id');
    }

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class, 'fornecedor_id');
    }

    public function manutencao()
    {
        return $this->belongsTo(Manutencao::class, 'manutencao_id');
    }
}
