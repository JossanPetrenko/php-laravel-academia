<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableAluno extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('aluno');
        Schema::create('aluno', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pessoa_id')->unsigned()->index();
            $table->foreign('pessoa_id')->references('id')->on('pessoa');
            $table->decimal('mensalidade', 3 , 2)->nullable();
            $table->decimal('peso', 3 , 2)->nullable();
            $table->decimal('altura', 3, 2)->nullable();
            $table->integer('treino_id')->unsigned()->index();
            $table->foreign('treino_id')->references('id')->on('treino');
            $table->timestamp('treino_data')->nullable();
            $table->timestamp('treino_data_treino')->nullable();
     	    $table->timestamp('peso_data')->nullable();
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
        Schema::dropIfExists('aluno');
    }
}
