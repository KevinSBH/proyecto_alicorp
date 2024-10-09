<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('project_type_id')->nullable();
            $table->foreign('project_type_id')->references('id')->on('proyect_types');
            $table->string('nombre_promocion');
            $table->text('desc_promocion')->nullable();
            $table->unsignedBigInteger('game_id')->nullable();
            $table->foreign('game_id')->references('id')->on('games');
            $table->text('marcas')->nullable();
            $table->string('dominio')->nullable();
            $table->dateTime('fecha_ini_proyecto', $precision = 0)->nullable();
            $table->dateTime('fecha_fin_proyecto', $precision = 0)->nullable();
            $table->dateTime('fecha_ini_participar', $precision = 0)->nullable();
            $table->dateTime('fecha_fin_participar', $precision = 0)->nullable();
            $table->string('tipo_letra')->nullable();
            $table->string('titulo_pestana')->nullable();
            $table->text('ruta_img')->nullable();
            $table->text('ruta_fav')->nullable();
            $table->integer('cantidad_premio')->nullable();
            $table->string('prob_no_premio')->default(1);
            $table->unsignedBigInteger('admin_id')->nullable();
            $table->foreign('admin_id')->references('id')->on('admins');
            $table->integer('status')->nullable();
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
        Schema::dropIfExists('projects');
    }
}
