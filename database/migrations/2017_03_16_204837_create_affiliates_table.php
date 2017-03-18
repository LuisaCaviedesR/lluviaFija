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
            $table->integer('afilliate_id')->unique();
            $table->integer('id_type_document');
            $table->string('name');
            $table->string('lastname');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
            $table->foreign('id_type_document')->references('id')->on('documentsTypes')
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
