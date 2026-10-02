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
        Schema::create('campanhaahs', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); // Os campos "created_at" e "updated_at" são criados automáticamente como timestamp NULL 
            $table->string('external_reference')->nullable();
            $table->string('mp_payment_id')->nullable();
            $table->string('firstname');
            $table->string('surname');
            $table->string('product')->default('vazio');
            $table->integer('quantity')->default(0);
            $table->decimal('valor', 10,2)->default(0.00);
            $table->enum('payment_status', ['pendente', 'pago', 'falha', 'cancelado'])->default('pendente');
            $table->string('email');
            $table->string('email_confirmation');
            $table->string('cpf');
            $table->string('fone');
            $table->string('nameReceiver')->nullable();
            $table->string('adress');
            $table->string('number');
            $table->string('complement')->nullable();
            $table->string('bairro');
            $table->string('city');
            $table->string('state');
            $table->string('cep');
            $table->timestamp('timestamp_envio')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('campanhaahs');
    }
};
