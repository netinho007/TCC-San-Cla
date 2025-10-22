<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_id',
        'user_id',
        'motivo_consulta',
        'urgencia',
        'status',
        'nome_tutor',
        'telefone_tutor',
        'email_tutor',
        'endereco_tutor',
        'autorizacao_uso'
    ];

    protected $attributes = [
        'status' => 'pendente'
    ];

    // Relação com pet
    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    // Relação com usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}