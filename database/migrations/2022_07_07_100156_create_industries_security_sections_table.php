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
        Schema::create('industries_security_sections', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('industries_page_id')->unsigned();
            $table->string('heading');
            $table->longText('description');
            $table->text('image');
            $table->string('slug')->nullable();

            $table->foreign('industries_page_id')->references('id')->on('industries_pages')->onDelete('cascade');
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
        Schema::dropIfExists('industries_security_sections');
    }
};
