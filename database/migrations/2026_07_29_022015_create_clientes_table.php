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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('product');
            $table->string('value');
            $table->enum('payment_status', ['pendente', 'pago', 'falha', 'cancelado'])->default('pendente');
            $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable(); // opção para verificação de e-mail pelo Laravel. NÃO IMPLEMENTADA AQUI.
            $table->string('email_confirmation')->unique();
            $table->string('cpf');
            $table->string('nameReceiver')->default('name');
            $table->string('adress');
            $table->string('number');
            $table->string('complement')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('cep');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
