<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeniskasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teniskas', function (Blueprint $table) {
            $table->id();
            $table->text('nazov');
            $table->text('cena');
            $table->text('velkost');
            $table->text('obrazok');
            $table->text('znacka');
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
        Schema::dropIfExists('teniskas');
    }
}
