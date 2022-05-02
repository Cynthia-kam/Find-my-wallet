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
        Schema::create('losts', function (Blueprint $table) {
            $table->timestamps();
            $table->string("description")->nullable();
            $table->string("national_id")->nullable();
            $table->string("driving_licence_id")->nullable();
            $table->string("insurance_id")->nullable();
            $table->string("employee_id")->nullable();
            $table->string("student_id")->nullable();
            $table->string("first_name");
            $table->string("last_name");
            $table->string("passport_number")->nullable();
            $table->string("road")->nullable();
            $table->string("phone");
            $table->string("email")->nullable();
            $table->string("month");
            $table->string("day");
            $table->string("year");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('losts');
    }
};
