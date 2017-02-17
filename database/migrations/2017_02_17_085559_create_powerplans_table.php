<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePowerplansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('powerplans', function(Blueprint $table) {
            $table->increments('id');
            $table->string('location');
            $table->string('hour0');
            $table->string('hour1');
            $table->string('hour2');
            $table->string('hour3');
            $table->string('hour4');
            $table->string('hour5');
            $table->string('hour6');
            $table->string('hour7');
            $table->string('hour8');
            $table->string('hour9');
            $table->string('hour10');
            $table->string('hour11');
            $table->string('hour12');
            $table->string('hour13');
            $table->string('hour14');
            $table->string('hour15');
            $table->string('hour16');
            $table->string('hour17');
            $table->string('hour18');
            $table->string('hour19');
            $table->string('hour20');
            $table->string('hour21');
            $table->string('hour22');
            $table->string('hour23');
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
        Schema::drop("powerplans");
    }
}
