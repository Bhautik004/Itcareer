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
        Schema::create('certificate_records', function (Blueprint $table) {
            $table->id();
            $table->string('register_no');
            $table->string('student_name');
            $table->string('son_of/dauther_of/wife_of');
            $table->string('course_name');
            $table->string('medium');
            $table->string('center_name');
            $table->string('center_address');
            $table->string('area');
            $table->string('exam_date');
            $table->string('issue_date');
            $table->string('certificate_no');
            $table->string('grade');
            $table->string('photo_name');
            $table->string('status')->default(0);
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
        Schema::dropIfExists('certificate_records');
    }
};
