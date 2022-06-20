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
        Schema::create('camera_specifications', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('camera_id');
            $table->string('wdr')->nullable();
            $table->string('max_resoluton')->nullable();
            $table->string('resoluton')->nullable();
            $table->string('sensor')->nullable();
            $table->string('bitrate')->nullable();
            $table->string('power_supply')->nullable();
            $table->string('lens')->nullable();
            $table->string('weight')->nullable();
            $table->string('senstivity')->nullable();
            $table->string('ingress_protection')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('power_consumption')->nullable();
            $table->string('temprature')->nullable();
            $table->string('mode')->nullable();
            $table->string('network_interface')->nullable();
            $table->string('ir_range')->nullable();
            $table->string('focal_length')->nullable();
            $table->string('horizontal_fov')->nullable();
            $table->string('aperture')->nullable();
            $table->string('zoom_focus')->nullable();
            $table->string('colors')->nullable();
            $table->string('retention')->nullable();
            $table->string('aspect_ratio')->nullable();
            $table->string('audio_analytics')->nullable();
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
        Schema::dropIfExists('camera_specifications');
    }
};
