<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('on_demand_exams', function (Blueprint $table) {
            $table->id();
            $table->string('f_name'); 
            $table->string('l_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->integer('state')->nullable();
            $table->integer('city')->nullable();
            $table->integer('pincode')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('signature')->nullable();
            $table->string('last_qualification')->nullable();
            $table->string('board_name')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('percentage')->nullable();
            $table->string('last_marksheet')->nullable();
            $table->string('course_id')->nullable();
            $table->date('exam_date');
            $table->string('trx_no');  
            $table->integer('status')->default('1');
            $table->integer('branch_id')->default('0');
            $table->integer('register_no')->nullable();
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
        Schema::dropIfExists('on_demand_exams');
    }
};
