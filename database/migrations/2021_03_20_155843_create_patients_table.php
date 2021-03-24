<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients_info', function (Blueprint $table) {
            $table->id();
            $table->string('patients_name'); 
            $table->string('age');
            $table->string('occupation');
            $table->mediumText('patients_address');
            $table->string('patients_contact_number');
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('guardian')->nullable();
            $table->string('guardian_occupation')->nullable();
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
        Schema::dropIfExists('patients_info');
    }
}
