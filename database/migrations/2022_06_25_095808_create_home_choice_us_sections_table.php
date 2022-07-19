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
        Schema::create('home_choice_us_sections', function (Blueprint $table) {
            $table->id();
            $table->string('choice_us_heading');
            $table->string('choice_us_sub_heading');
            $table->string('choice_us_description');
            $table->text('choice_us_image');
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
        Schema::dropIfExists('home_choice_us_sections');
    }
};
