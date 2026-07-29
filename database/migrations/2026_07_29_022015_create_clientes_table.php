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
            $table->string('product')->default('vazio');
            $table->string('quantity')->default('vazio');
            $table->string('valor')->default('vazio');
            $table->enum('payment_status', ['pendente', 'pago', 'falha', 'cancelado'])->default('pendente');
            $table->string('email')->unique();
            $table->string('email_confirmation')->unique();
            $table->string('cpf', 11)->unique();
            $table->string('nameReceiver')->default('Mesmo nome');
            $table->string('adress');
            $table->string('number');
            $table->string('complement')->nullable();;
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
