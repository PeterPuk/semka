<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateObjednavkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objednavkas', function (Blueprint $table) {
            $table->id();
            $table->integer('id_teniska');
            $table->integer('id_zakaznik');
            $table->text('meno');
            $table->text('priezvisko');
            $table->text('adresa');
            $table->integer('psc');
            $table->text('doprava');
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
        Schema::dropIfExists('objednavkas');
    }
}
