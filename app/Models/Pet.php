<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome_pet',
        'especie',
        'raca',
        'idade',
        'peso',
        'sexo',
        'vacinas_em_dia',
        'vermifugacao_em_dia',
        'castrado',
        'doencas_previas',
        'temperamento',
        'socializacao',
        'comportamento_estranho',
        'tipo_alimentacao',
        'frequencia_alimentacao',
        'alergias'
    ];

    // Relação com usuário
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relação com consultas
    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}