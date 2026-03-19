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
        Schema::create('catalogos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('autor');
            $table->text('descricao');
            $table->decimal('preco', 4, 2);
            $table->bigInteger('isbn');
            $table->Integer('numberPages');
            $table->Integer('origem'); // 1 para o Coletivo e 0 para publicacao externa.
            $table->Integer('tipo'); // 1 para o físico e 0 para ebook.
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catalogos');
    }
};
