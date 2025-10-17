namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PasswordReset extends Model
{
    public $timestamps = false; // só created_at
    protected $fillable = ['email', 'token', 'created_at'];
    protected $dates = ['created_at'];
    protected $table = 'password_resets';
}
