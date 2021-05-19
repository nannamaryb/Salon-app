<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddServicesModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_services_models', function (Blueprint $table) {
            $table->id();
            $table->string("sname");
            $table->string("sdesc");
            $table->string("srate");
            $table->string("simage");
            $table->string("start_date");
            $table->string("end_date");
            $table->string("start_time");
            $table->string("end_time");
            $table->string("duration");

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
        Schema::dropIfExists('add_services_models');
    }
}
