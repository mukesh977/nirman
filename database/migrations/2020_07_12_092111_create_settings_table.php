<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('institution_logo')->nullable();
            $table->string('cover_photo')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('institution_email')->nullable();
            $table->string('institution_phone_number')->nullable();
            $table->string('institution_mobile_number')->nullable();
            $table->string('institution_address')->nullable();
            $table->string('institution_facebook_link')->nullable();
            $table->string('institution_twitter_link')->nullable();
            $table->string('institution_instagram_link')->nullable();
            $table->string('institution_linkedIn_link')->nullable();
            $table->string('institution_youtube_link')->nullable();
            $table->string('institution_google_plus_link')->nullable();
            $table->longText('institution_google_map')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
