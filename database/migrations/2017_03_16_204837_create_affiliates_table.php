<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAffiliatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       //
         Schema::create('affiliates', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('affiliate_id')->unique();
            $table->integer('id_type_document')->unsigned();
            $table->string('name');
            $table->string('lastname');
            $table->string('email')->unique();
            $table->string('phone');
            $table->timestamps();
            $table->foreign('id_type_document')->references('id')->on('document_types')
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
        Schema::dropIfExists('affiliates');
    }
}
