<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSimploniensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::disableForeignKeyConstraints();
        Schema::create('simploniens', function (Blueprint $table) {
            $table->bigInteger('telephone')->primary();        
            $table->string('nom', 80);
            $table->string('prenom', 80);
            $table->string('genre');
            $table->string('portrait');
            $table->string('email')->unique();
            $table->string('fonction')->nullable();
            $table->string('entreprise')->nullable();
            $table->integer('promotion')->nullable();
            $table->integer('idStatut')->unsigned();            

            $table->foreign('idStatut')
                  ->references('idStatut')
                  ->on('statuts')
               ->onDelete('restrict')
               ->onUpdate('restrict');
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
        Schema::dropIfExists('simploniens');
    }
}
