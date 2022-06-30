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
        Schema::create('home_pages', function (Blueprint $table) {
            $table->id();
            $table->string('header_heading');
            $table->text('header_description');
            $table->string('hero_section_video');
            $table->string('what_we_use_heading');
            $table->string('about_us_heading');
            $table->string('features_heading');
            $table->text('features_description');
            $table->string('features_image');
            $table->string('business_heding');
            $table->string('broadcast_heding');

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
        Schema::dropIfExists('home_pages');
    }
};
