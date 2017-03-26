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
            $table->integer('affiliate_id')->unsigned();
            $table->integer('days');
            $table->integer('nights');
            $table->float('price', 11, 2)->default(0.0);
            $table->integer('quantity');
            $table->date('datein');
            $table->date('dateout');
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
        //
         Schema::dropIfExists('rentals');
    }
}
