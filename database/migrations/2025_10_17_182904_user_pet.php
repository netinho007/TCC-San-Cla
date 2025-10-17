<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('user_pets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nome');
            $table->string('especie');
            $table->string('raca')->nullable();
            $table->integer('idade')->nullable(); // em anos
            $table->decimal('peso', 5, 2)->nullable(); // kg
            $table->enum('sexo', ['Macho', 'Fêmea']);
            $table->boolean('vacinas_em_dia')->default(false);
            $table->boolean('vermifugo_em_dia')->default(false);
            $table->boolean('castrado')->default(false);
            $table->text('doencas_previas')->nullable();
            $table->string('temperamento')->nullable();
            $table->text('comportamento_outros_animais')->nullable();
            $table->text('comportamento_estranho')->nullable();
            $table->string('tipo_alimentacao')->nullable();
            $table->string('frequencia_alimentacao')->nullable();
            $table->string('alergias_alimentares')->nullable();
            $table->text('motivo_consulta');
            $table->enum('nivel_urgencia', ['Baixo', 'Médio', 'Alto']);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('user_pets');
    }
};
