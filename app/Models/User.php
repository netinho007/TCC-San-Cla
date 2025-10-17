<?php 
namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class user extends Authenticatable {
    use HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'cpf',
        'data_nascimento',
        'telefone',
        'email',
        'password',
    ];

    protected $hidden = ['password', 'remember_token'];

    public function endereco() {
        return $this->hasOne(endereco::class);
    }

    public function pets() {
        return $this->hasMany(userPet::class);
    }

    public function avaliacoes() {
        return $this->hasMany(avaliacao::class);
    }
}
