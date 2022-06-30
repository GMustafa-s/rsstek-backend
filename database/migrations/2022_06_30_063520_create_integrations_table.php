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
        Schema::create('integrations', function (Blueprint $table) {
            $table->id();
            $table->string('header_heading');
            $table->text('header_description');

            $table->string('camera_heading');
            $table->text('camera_description');

            $table->string('second_camera_heading');
            $table->string('control_heading');
            $table->string('outputs_heading');
            $table->string('management_heading');
            $table->string('providers_heading');
            $table->string('communication_tools_heading');


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
        Schema::dropIfExists('integrations');
    }
};
