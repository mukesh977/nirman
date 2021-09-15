<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->longText('review')->nullable();
            $table->float('rating', 8,2)->nullable();
            $table->boolean('status')->nullable();
            $table->string('customer_name')->nullable();
            $table->unsignedBigInteger('product_id')
            ->constrained('products')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->unsignedBigInteger('user_id')
            ->constrained('users')
            ->onUpdate('cascade')
            ->onDelete('SET NULL');
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
        Schema::dropIfExists('reviews');
    }
}
