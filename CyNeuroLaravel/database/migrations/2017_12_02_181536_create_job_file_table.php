<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobFileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('job_file', function (Blueprint $table) {
            $table->string('template_id');
            $table->integer('step_id');
            $table->integer('step_option_id');
            $table->string('user_id');
            $table->string('job_name');
            $table->string('file_name');
        });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('job_file');
    }
}
