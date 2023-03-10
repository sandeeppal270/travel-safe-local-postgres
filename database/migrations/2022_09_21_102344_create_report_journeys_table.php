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
        Schema::create('report_journeys', function (Blueprint $table) {
            $table->id();
            $table->string("app_user_id");
            $table->string("message");
            $table->string("email_id");
            $table->string("app_user_name");
            $table->string("journey_image_attachment");
            $table->string("start_location");
            $table->string("destination_location");
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
        Schema::dropIfExists('report_journeys');
    }
};
