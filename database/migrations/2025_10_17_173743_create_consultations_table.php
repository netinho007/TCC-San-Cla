<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('pet_id')->constrained()->onDelete('cascade');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('motivo_consulta');
            $table->enum('urgencia', ['baixa', 'media', 'alta', 'emergencia'])->nullable();
            $table->enum('status', ['pendente', 'agendada', 'realizada', 'cancelada'])->default('pendente');
            $table->string('nome_tutor');
            $table->string('telefone_tutor', 20);
            $table->string('email_tutor')->nullable();
            $table->text('endereco_tutor')->nullable();
            $table->boolean('autorizacao_uso')->default(false);
            $table->timestamps();

            $table->index('pet_id');
            $table->index('user_id');
            $table->index('status');
        });
    }

    public function down()
    {
        Schema::dropIfExists('consultations');
    }
}
