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
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->nullable(false);
            $table->string('url')->nullable(false);
            $table->double('preco')->nullable(false);
            $table->double('quantidade')->nullable(true);
            $table->string('marca')->nullable(true);
            $table->string('descricao')->nullable(false);
            $table->boolean('disponivel')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
};
