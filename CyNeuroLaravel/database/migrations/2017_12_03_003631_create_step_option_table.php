<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStepOptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('step_option', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('step_id');
            $table->string('step_option_name'); 
            $table->string('step_option_description');
            $table->enum('location', ['local', 'remote']);
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
        Schema::dropIfExists('step_option');
    }
}
