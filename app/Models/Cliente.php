<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'firstname',
        'surname',
        'product',
        'quantity',
        'valor',
        'payment_status',
        'email',
        'email_confirmation',
        'cpf',
        'fone',
        'nameReceiver',
        'adress',
        'number',
        'complement',
        'bairro',
        'city',
        'state',
        'cep',
        'timestamp_envio'
    ];
}
