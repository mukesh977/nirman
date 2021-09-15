<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAboutUsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->longText('our_core_values')->nullable();
            $table->longText('our_vision')->nullable();
            $table->longText('our_mission')->nullable();
            $table->longText('youtube_video_link')->nullable();
            $table->string('years_of_experience')->nullable();
            $table->string('happy_members')->nullable();
            $table->string('successful_project')->nullable();
            $table->string('fund_collected')->nullable();
            $table->longText('about_us_description')->nullable();
            $table->longText('first_description')->nullable();            
            $table->longText('second_description')->nullable();
            $table->string('cover_image')->nullable();
            $table->string('first_featured_image')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('second_featured_image')->nullable();
            $table->string('third_featured_image')->nullable();
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
        Schema::dropIfExists('about_us');
    }
}
