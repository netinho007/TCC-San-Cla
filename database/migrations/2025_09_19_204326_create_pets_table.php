use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePetsTable extends Migration
{
    public function up()
    {
        Schema::create('pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nome_pet');
            $table->string('especie', 50);
            $table->string('raca', 100)->nullable();
            $table->integer('idade')->nullable();
            $table->decimal('peso', 5, 2)->nullable();
            $table->enum('sexo', ['macho', 'femea'])->nullable();
            $table->enum('vacinas_em_dia', ['sim', 'nao', 'nao_sei'])->nullable();
            $table->enum('vermifugacao_em_dia', ['sim', 'nao', 'nao_sei'])->nullable();
            $table->enum('castrado', ['sim', 'nao'])->nullable();
            $table->text('doencas_previas')->nullable();
            $table->enum('temperamento', ['calmo', 'agitado', 'medroso', 'agressivo', 'amigavel'])->nullable();
            $table->enum('socializacao', ['muito_social', 'social', 'neutro', 'agressivo'])->nullable();
            $table->text('comportamento_estranho')->nullable();
            $table->enum('tipo_alimentacao', ['racao', 'comida_caseira', 'mista', 'outro'])->nullable();
            $table->enum('frequencia_alimentacao', ['1_vez_dia', '2_vezes_dia', '3_vezes_dia', 'livre'])->nullable();
            $table->text('alergias')->nullable();
            $table->timestamps();

            $table->index('user_id');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pets');
    }
}
