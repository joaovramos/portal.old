<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intranet.metas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->enum('indicador',['porcento', 'unidade']);
            $table->double('meta', 5, 2);
            $table->enum('medicao', ['bimestre', 'trimestre', 'semestre']);
            $table->double('peso', 5,2);
            $table->bigInteger('id_departamento');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::table('intranet.metas', function (Blueprint $table) {
            $table->foreign('id_departamento')->references('id')->on('intranet.departamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas');
    }
}
