<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopankasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topankas', function (Blueprint $table) {
            $table->id();
            $table->double('cena');
            $table->integer('velkost');
            $table->text('nazov');
            $table->text('znacka');
            $table->text('obrazok');
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
        Schema::dropIfExists('topankas');
    }
}
