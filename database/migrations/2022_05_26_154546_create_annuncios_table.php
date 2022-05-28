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
        Schema::create('annuncios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('locatore');
            $table->enum('tipologia', ['Appartamento', 'Posto Letto']);
            $table->date('inizio_disp');
            $table->date('fine_disp');
            $table->longText('descrizione');
            $table->string('via');
            $table->string('civico');
            $table->integer('prezzo');
            $table->integer('n_camere');
            $table->integer('posti_letto');
            $table->string('tipo_postoletto')->nullable();
            $table->integer('superficie');
            $table->integer('n_bagni');
            $table->tinyInteger('zona_comune');
            $table->tinyInteger('angolo_studio');
            $table->tinyInteger('balcone');
            $table->tinyInteger('wi-fi');
            $table->tinyInteger('cucina');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('annuncios');
    }
};
