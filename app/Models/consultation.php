namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = [
        'pet_id', 'user_id', 'motivo_consulta', 'urgencia', 'status',
        'nome_tutor', 'telefone_tutor', 'email_tutor', 'endereco_tutor',
        'autorizacao_uso',
    ];

    protected $casts = [
        'autorizacao_uso' => 'boolean',
    ];

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
