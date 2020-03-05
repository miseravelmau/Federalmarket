<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableFinanciamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_financiamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->decimal('Valor_Produto', 10,2);
            $table->decimal('Tx_Finan', 10,2);
            $table->integer('Num_parcelas');
            $table->decimal('Valor_Parcela', 10,2);
            $table->decimal('Valor_total_final', 10,2);
            $table->integer('Num_Parc_Pagas');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); //chave estrageira (finaciamento_user_id_foreign)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_financiamento');
    }
}
