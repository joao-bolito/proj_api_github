<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pesquisa_usuario', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nameAdmin');
            $table->string('usuarioPesquisado');
            $table->timestamps();

            // Criando chave estrangeira para linkar o nome do admin com tudo o que ele pesquisar
            $table->foreign('nameAdmin')->references('nome')->on('admins')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesquisa_usuario');
    }
};
