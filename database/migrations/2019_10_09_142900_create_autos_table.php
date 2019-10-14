<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('autos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('brand', 30);
            $table->string('model', 30);
            $table->string('color', 20);
            $table->integer('year')->nullable();
            $table->integer('kilometers')->nullable();
            $table->boolean('air')->default(0);
            $table->boolean('airbag')->default(0);
            $table->boolean('steering')->default(0);
            $table->boolean('abs')->default(0);
            $table->boolean('gps')->default(0);
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
        Schema::dropIfExists('autos');
    }
}
