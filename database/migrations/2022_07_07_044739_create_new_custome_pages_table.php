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
        Schema::create('new_custome_pages', function (Blueprint $table) {
            $table->id();
            $table->string('page_title');
            $table->string('meta_name');
            $table->string('meta_description');
            $table->string('header_heading');
            $table->string('header_description');
            $table->text('bg_image');
            $table->string('slug')->nullable();
            $table->text('body');
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
        Schema::dropIfExists('new_custome_pages');
    }
};
