<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProjetsSimploniensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
             Schema::create('projets_simploniens', function (Blueprint $table) {
                $table->increments('id');               
                $table->integer('idProjet')->unsigned();
                $table->bigInteger('telephone');
                $table->timestamps();

                $table->foreign('idProjet')->references('idProjet')->on('projets')
                            ->onDelete('restrict')
                            ->onUpdate('restrict');
    
                $table->foreign('telephone')->references('telephone')->on('simploniens')
                            ->onDelete('restrict')
                            ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projets_simploniens');
    }
}
