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
        Schema::create('camera_compare_pages', function (Blueprint $table) {
            $table->id();
            
            $table->string('header_heading');
            $table->longText('header_description');
            $table->text('bg_image');

            $table->string('product_crousal_heading');

            $table->string('table_heading');
            $table->longText('table_description');



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
        Schema::dropIfExists('camera_compare_pages');
    }
};
