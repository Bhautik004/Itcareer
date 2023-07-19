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
        Schema::create('student_enquiries', function (Blueprint $table) {
            $table->id();
             $table->string('surname');  
            $table->string('name');  
            $table->string('f_name');  
            $table->date('dob');  
            $table->string('phone');   
            $table->string('address');  
            $table->string('state');  
            $table->string('city');  
            $table->string('pincode');  
            $table->string('education');    
            $table->string('branch_id');    
            $table->string('course_id');    
            $table->string('status')->default('1'); 
            $table->string('admission_form')->default('0'); 
            $table->string('trx_no')->nullable(); 
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
        Schema::dropIfExists('student_enquiries');
    }
};
