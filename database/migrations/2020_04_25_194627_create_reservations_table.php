<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->integer('phone');
            $table->text('message');
            $table->timestamps();

        });



            Schema::table('reservations', function($table) { 
                $table->foreign('product_id')->references('id')->on('product')->onDelete('cascade');

            });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        Schema::dropIfExists('reservations');
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}

