<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'product',
        'quantity',
        'valor',
        'payment_status',
        'email',
        'email_confirmation',
        'cpf',
        'nameReceiver',
        'adress',
        'number',
        'complement',
        'city',
        'state',
        'cep',
    ];
}
