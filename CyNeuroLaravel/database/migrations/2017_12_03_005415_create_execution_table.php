<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExecutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('execution', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('job_id');
            $table->timestamp('time_started');
            $table->timestamp('time_completed')->nullable($value = true);
            $table->enum('success_failure',['success','failure'])->nullable($value = true);
            $table->string('error_message')->nullable($value = true);
            $table->string('user_directory');          
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
        Schema::dropIfExists('execution');
    }
}
