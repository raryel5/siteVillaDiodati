<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catalogo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 'titulo', 'autor', 'descricao', 'ano', 'preco', 'isbn', 'numberPages', 'origem', 'tipo', 'created_at', 'updated_at'
    ];

}
