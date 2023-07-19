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
        Schema::create('student_verifies', function (Blueprint $table) {
            $table->id();
            $table->string('student_id')->nullable();
            $table->date('trx_date')->nullable();
            $table->string('trx_no')->nullable();
            $table->string('trx_amount')->nullable();
            $table->string('branch_id')->nullable();
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
        Schema::dropIfExists('student_verifies');
    }
};
