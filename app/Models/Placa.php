<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Placa extends Model
{
    use HasFactory;

    // Define a tabela associada ao modelo
    protected $table = 'placas';

    // Define quais atributos são mass assignable (preenchíveis em massa)
    protected $fillable = [
        'idUser',
        'idDescricao',
    ];


    public function user()
    {
        return $this->belongsTo(User::class, 'idUser');
    }
    
}
