<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intranet.funcionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100)->nullable();
            $table->bigInteger('cpf')->nullable();
            $table->bigInteger('matricula')->nullable();
            $table->date('nascimento');
            $table->bigInteger('id_departamento');
            $table->rememberToken();
            $table->timestamps();

        });

        Schema::table('intranet.funcionarios', function (Blueprint $table) {
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
        Schema::dropIfExists('funcionarios');
    }
}
