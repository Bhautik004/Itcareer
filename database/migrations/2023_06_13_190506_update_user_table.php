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
        Schema::table('users', function($table) {
            $table->string('l_name')->nullable();
            $table->string('m_name')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->text('address')->nullable();
            $table->integer('state')->nullable();
            $table->integer('city')->nullable();
            $table->integer('pincode')->nullable();
            $table->bigInteger('phone')->nullable();
            $table->bigInteger('alter_phone')->nullable();
            $table->string('last_qualification')->nullable();
            $table->string('id_proof')->nullable();
            $table->string('last_marksheet')->nullable();
            $table->string('signature')->nullable();
            $table->string('course_id')->nullable();
            $table->bigInteger('register_no')->nullable();
            $table->string('board_name')->nullable();
            $table->string('passing_year')->nullable();
            $table->string('percentage')->nullable();
            $table->string('trx_no');  
            $table->renameColumn('name', 'f_name');
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
          Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('f_name', 'name');
        });
    }
};
