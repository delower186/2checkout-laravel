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
        Schema::create('twocheckouts', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('userId')->unsigned()->nullable();
            $table->bigInteger('productId')->unsigned()->nullable();
            $table->bigInteger('reference')->unsigned();
            $table->float('price')->unsigned();
            $table->string('currency')->nullable();
            $table->string('signature');
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
        Schema::dropIfExists('twocheckouts');
    }
};
