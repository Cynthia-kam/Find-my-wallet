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
        Schema::create('founds', function (Blueprint $table) {
            $table->timestamps();
            $table->increments('id');
            $table->string("names");
            $table->string("description");
            $table->string("phone");
            $table->string("national_id")->nullable;
            $table->string("driving_licence_id")->nullable;
            $table->string("insurance_id")->nullable;
            $table->string("employee_id")->nullable;
            $table->string("student_id")->nullable;
             $table->string("passport_number")->nullable;
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('founds');
    }
};
