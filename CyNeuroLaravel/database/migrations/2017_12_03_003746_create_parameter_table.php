<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateParameterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('parameter', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('step_option_id');
            $table->enum('input_output', ['input', 'output']);
            //$table->enum('data_type', ['string','integer','real']);
            $table->string('parameter_name'); 
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
        Schema::dropIfExists('parameter');
    }
}
