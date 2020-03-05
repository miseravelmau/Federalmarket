<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
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
            $table->unsignedBigInteger('store_id');
            $table->string('nome');
            $table->string('descricao');
            $table->text('corpo_descricao');
            $table->decimal('valor', 10,2);
            $table->decimal('descontos',10,2);
            $table->decimal('impostos',10,2);
            $table->string('slug');

            $table->timestamps();

            $table->foreign('store_id')->references('id')->on('table_store');
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
}
