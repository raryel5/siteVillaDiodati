<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Novidade extends Model
{
    use HasFactory;

    protected $fillable = [
        'id','title', 'slug', 'body', 'image', 'user_id', 'is_published'
    ];

    // Definir relação com o usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
