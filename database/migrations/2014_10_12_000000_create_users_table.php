use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id(); // BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY
            $table->string('nome');
            $table->string('cpf', 14)->unique();
            $table->date('data_nascimento');
            $table->string('telefone', 20);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('cep', 10);
            $table->string('endereco');
            $table->string('numero', 10);
            $table->string('complemento', 100)->nullable();
            $table->string('bairro', 100);
            $table->string('cidade', 100);
            $table->string('estado', 2);
            $table->string('remember_token', 100)->nullable();
            $table->boolean('newsletter')->default(false);
            $table->timestamp('email_verified_at')->nullable();
            $table->timestamps();

            $table->index('email'); // idx_users_email
            $table->index('cpf');   // idx_users_cpf
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
