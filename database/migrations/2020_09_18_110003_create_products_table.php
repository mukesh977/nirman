<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('sku')
            ->unique()
            ->nullable();
            $table->string('slug');
            $table->decimal('regular_price', 10, 2)->nullable();
            $table->decimal('sale_price', 10, 2)->nullable();
            $table->longText('features')->nullable();
            $table->longText('description')->nullable();
            $table->integer('stock')->nullable();
            $table->string('featured_image')->nullable();
            $table->longText('product_image')->nullable();
            $table->integer('order');
            $table->boolean('status');
            $table->unsignedBigInteger('product_categories_id')->nullable();
            $table->foreign('product_categories_id')
            ->references('id')
            ->on('product_categories')
            ->onUpdate('cascade');
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
        Schema::dropIfExists('products');
    }
}
