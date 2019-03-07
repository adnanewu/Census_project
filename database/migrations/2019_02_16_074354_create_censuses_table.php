<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCensusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('censuses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('household_id');
            $table->string('name');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->integer('occupation_id');
            $table->string('mobile_no');
            $table->string('nid');
            $table->integer('education_id');
            $table->string('dob');
            $table->integer('gender_id');
            $table->integer('religion_id');
            $table->integer('marital_id');
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
        Schema::dropIfExists('censuses');
    }
}
