namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nome', 'cpf', 'data_nascimento', 'telefone', 'email', 'password',
        'cep', 'endereco', 'numero', 'complemento', 'bairro', 'cidade', 'estado',
        'newsletter',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'newsletter' => 'boolean',
        'email_verified_at' => 'datetime',
        'data_nascimento' => 'date',
    ];

    public function pets()
    {
        return $this->hasMany(Pet::class);
    }

    public function consultations()
    {
        return $this->hasMany(Consultation::class);
    }
}
