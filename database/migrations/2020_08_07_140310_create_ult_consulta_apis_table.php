<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUltConsultaApisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ult_consulta_apis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('id_recurso')->unique();
            $table->string('ult_consulta_api');
            $table->string('id_api');
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
        Schema::dropIfExists('ult_consulta_apis');
    }
}
