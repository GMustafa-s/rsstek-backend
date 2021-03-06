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
        Schema::create('aboutus_about_our_product_section', function (Blueprint $table) {
            $table->id();
            $table->string('heading');

            $table->text('icon_1');
            $table->string('text_1');

            $table->text('icon_2');
            $table->string('text_2');

            $table->text('icon_3');
            $table->string('text_3');

            $table->text('icon_4');
            $table->string('text_4');
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
        Schema::dropIfExists('aboutus_about_our_product_section');
    }
};
