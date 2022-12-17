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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->string("app_user_id");
            $table->string("address");
            $table->string("latitude");
            $table->string("longitude");
            $table->string("city");
            $table->string("district");
            $table->string("state");
            $table->string("country");
            $table->string("zip");
            $table->string("crime_count");
            $table->string("incident_type");
            $table->string("r_type");
            $table->string('agent');
            $table->string('action1');
            $table->string('action2');
            $table->string('action3');
            $table->string('delegated');
            $table->string('status');
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
        Schema::dropIfExists('locations');
    }
};
