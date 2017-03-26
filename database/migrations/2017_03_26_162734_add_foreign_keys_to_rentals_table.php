<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysToRentalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('rentals', function (Blueprint $table) {
              $table->foreign('cabin_id')->references('id')->on('cabins')
                   ->onUpdate('cascade')
                   ->onDelete('cascade');
           $table->foreign('affiliate_id')->references('id')->on('affiliates')
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
        Schema::table('rentals', function (Blueprint $table) {
            //
             $table->dropForeign('cabin_id'); 
             $table->dropForeign('affiliate_id');             
    

        });
    }
}
