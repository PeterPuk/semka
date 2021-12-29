<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZakazniksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zakazniks', function (Blueprint $table) {
            $table->id();
            $table->text('meno');
            $table->text('priezvisko');
            $table->text('mail');
            $table->text('tel_cislo');
            $table->text('heslo');

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
        Schema::dropIfExists('zakazniks');
    }
}
