<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStore extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_store', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('descricao');
            $table->string('telefone');
            $table->string('celular');
            $table->string('slug');
            $table->string('endereco');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users'); //chave estrangeira (stores_user_id_foreign)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_store');
    }
}
