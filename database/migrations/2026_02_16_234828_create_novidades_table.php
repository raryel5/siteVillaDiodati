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
        Schema::create('novidades', function (Blueprint $table) {
            $table->id(); // Primary Key
        $table->string('title'); // Título do post
        $table->string('slug')->unique(); // Slug para URL amigável
        $table->text('body'); // Conteúdo completo
        $table->string('image')->nullable(); // Imagem de destaque (opcional)
        // $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Autor (Relacionamento)
        $table->boolean('is_published')->default(false); // Status rascunho/publicado
        $table->timestamps(); // Created_at e Updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('novidades');
    }
};
