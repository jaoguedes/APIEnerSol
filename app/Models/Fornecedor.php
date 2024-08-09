<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedores';

    // Se a tabela usa timestamps
    public $timestamps = true;
    
    use HasFactory;

    protected $fillable = [
        'nomeDoFornecedor',
        'preco',
        'potencia',
        'tamanho',
    ];

    public function orcamentos()
    {
        return $this->hasMany(Orcamento::class, 'fornecedor_id');
    }
}
