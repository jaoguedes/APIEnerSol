<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manutencao extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomeDaEquipe',
        'preco',
    ];

    public function orcamentos()
    {
        return $this->hasMany(Orcamento::class, 'manutencao_id');
    }
}
