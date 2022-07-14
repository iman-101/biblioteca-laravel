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
        Schema::create('libros', function (Blueprint $table) {
            $table->id();
            $table->char('isbn',17)->nullable(false)->unique();
            $table->string('titulo')->nullable(false);
            $table->string('editorial')->nullable(false);
            $table->string('idioma')->nullable(false)->default('Castellano');
            $table->string('autor')->nullable(false);
            $table->integer('ediciones')->nullable(false);
            $table->integer('edadrecomendada',0)->nullable(false);
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
        Schema::dropIfExists('libros');
    }
};
