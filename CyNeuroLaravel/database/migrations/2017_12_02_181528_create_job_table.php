<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('job', function (Blueprint $table) {
            $table->string('template_id');
            $table->integer('step_id');
            $table->integer('step_option_id');
            $table->string('user_id');
            $table->string('job_name');
            $table->timestamp('time_created');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job');
    }
}
