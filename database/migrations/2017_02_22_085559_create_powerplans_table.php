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
            $table->engine = 'InnoDB';

            $table->bigIncrements('id');
            $table->date('month')->index();
            $table->string('day', 3)->index();
            $table->string('location', 100)->index();
            $table->string('hour0', 1)->nullable();
            $table->string('hour1', 1)->nullable();
            $table->string('hour2', 1)->nullable();
            $table->string('hour3', 1)->nullable();
            $table->string('hour4', 1)->nullable();
            $table->string('hour5', 1)->nullable();
            $table->string('hour6', 1)->nullable();
            $table->string('hour7', 1)->nullable();
            $table->string('hour8', 1)->nullable();
            $table->string('hour9', 1)->nullable();
            $table->string('hour10', 1)->nullable();
            $table->string('hour11', 1)->nullable();
            $table->string('hour12', 1)->nullable();
            $table->string('hour13', 1)->nullable();
            $table->string('hour14', 1)->nullable();
            $table->string('hour15', 1)->nullable();
            $table->string('hour16', 1)->nullable();
            $table->string('hour17', 1)->nullable();
            $table->string('hour18', 1)->nullable();
            $table->string('hour19', 1)->nullable();
            $table->string('hour20', 1)->nullable();
            $table->string('hour21', 1)->nullable();
            $table->string('hour22', 1)->nullable();
            $table->string('hour23', 1)->nullable();
            
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
        Schema::dropIfExists("powerplans");
    }
}
