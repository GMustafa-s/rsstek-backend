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
        Schema::create('solution_sub_pages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('page_categories_id');
            $table->string('title');
            $table->longText('description');
            $table->string('fetaured_image');
            $table->string('video');
            $table->string('slug');
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
        Schema::dropIfExists('solution_sub_pages');
    }
};
