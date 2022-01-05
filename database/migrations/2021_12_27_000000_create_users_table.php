<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Lietotaja_lomas', function(Blueprint $table) {
            $table->increments('Loma_ID');
            $table->string('Nosaukums');
            $table->string('Apraksts');
        });
        Schema::create('Lietotaji', function(Blueprint $table) {
            $table->string('Personas_kods')->unique();
            $table->string('Vards');
            $table->string('Uzvards');
            if (Schema::hasColumn('Lietotaja_lomas', 'Loma_ID')) {
                $table->foreignId('Loma_ID')->constrained('Lietotaja_lomas');
            }
            $table->string('Apliecibas_nr')->nullable($value = true)->unique();
            $table->string('Telefona_nr');
            $table->string('password')->invisible();
            $table->rememberToken()->invisible();
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
        Schema::dropIfExists('Lietotaji');
        Schema::dropIfExists('Lietotaja_lomas');
    }
}
