<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLayoutProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('layout_product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('layout_id');
    
            $table->unsignedBigInteger('product_id');
        
            $table->foreign('layout_id')
            ->references('id')
            ->on('layouts')
            ->onDelete('cascade');
        
            $table->foreign('product_id')
            ->references('id')
            ->on('products')
            ->onDelete('cascade');
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
        Schema::dropIfExists('layout_product');
    }
}
