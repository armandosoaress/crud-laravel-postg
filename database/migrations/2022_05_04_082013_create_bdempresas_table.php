<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bdempresas', function (Blueprint $table) {
            $table->id();
            $table->string('nomef');
            $table->string('cnpj');
            $table->string('dataf');
            $table->string('emailc');
            $table->string('telefone');
            $table->string('cep');
            $table->string('endereco');
            $table->string('updated_at');
            $table->string('created_at');    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bdempresas');
    }
};
