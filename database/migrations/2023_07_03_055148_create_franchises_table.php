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
        Schema::create('franchises', function (Blueprint $table) {
            $table->id();
            $table->string('prop_name');  
            $table->string('f_name');  
            $table->date('dob');  
            $table->string('phone');  
            $table->string('email');  
            $table->string('center_name');  
            $table->string('center_address');  
            $table->string('state');  
            $table->string('city');  
            $table->string('pincode');  
            $table->string('ref_by');  
            $table->string('enq_purpose')->nullable();  
            $table->string('status')->default('1');  
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
        Schema::dropIfExists('franchises');
    }
};
