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
        Schema::create('aboutus_our_work_section', function (Blueprint $table) {
            $table->id();
            $table->string(('our_work_heading'));

            $table->string('sub_heading_1');
            $table->text('sub_heading_1_icon');

            $table->string('sub_heading_2');
            $table->text('sub_heading_2_icon');

            $table->string('sub_heading_3');
            $table->text('sub_heading_3_icon');

            $table->string('sub_heading_4');
            $table->text('sub_heading_4_icon');

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
        Schema::dropIfExists('aboutus_our_work_section');
    }
};
