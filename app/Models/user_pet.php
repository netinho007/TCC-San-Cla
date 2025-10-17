<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_Pet extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'especie',
        'raca',
        'idade',
        'peso',
        'sexo',
        'vacinas_em_dia',
        'vermifugo_em_dia',
        'castrado',
        'doencas_previas',
        'temperamento',
        'comportamento_outros_animais',
        'comportamento_estranho',
        'tipo_alimentacao',
        'frequencia_alimentacao',
        'alergias_alimentares',
        'motivo_consulta',
        'nivel_urgencia',
    ];

    public function user() {
        return $this->belongsTo(user::class);
    }
}
