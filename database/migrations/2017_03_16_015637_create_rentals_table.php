<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentals', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cabin_id')->unsigned();
            $table->integer('affiliates_id')->unsigned();
            $table->integer('days');
            $table->integer('nights');
            $table->float('price', 11, 2)->default(0.0);
            $table->integer('quantity');
            $table->date('datein');
            $table->date('dateout');
            $table->timestamps();
            $table->foreign('cabin_id')->references('id')->on('cabins')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
           $table->foreign('affiliates_id')->references('id')->on('affiliates')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
         Schema::dropIfExists('rentals');
    }
}
