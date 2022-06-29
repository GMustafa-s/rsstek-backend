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
        Schema::create('aboutus_top_info_section', function (Blueprint $table) {
            $table->id();
            
            $table->string('value_1');
            $table->string('text_1');
            $table->text('icon_1');

            $table->string('value_2');
            $table->string('text_2');
            $table->text('icon_2');

            $table->string('value_3');
            $table->string('text_3');
            $table->text('icon_3');
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
        Schema::dropIfExists('aboutus_top_info_section');
    }
};
