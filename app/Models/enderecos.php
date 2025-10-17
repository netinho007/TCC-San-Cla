<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class endereco extends Model {
    use HasFactory;

    protected $fillable = [
        'user_id',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'cidade',
        'estado',
    ];

    public function user() {
        return $this->belongsTo(user::class);
    }
}
