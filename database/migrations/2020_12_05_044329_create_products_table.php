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
        Schema::create('products', function (Blueprint $product) {
            $product->id();
            $product->foreignId('id_type')->constrained('types');
            $product->string('name');
            $product->bigInteger('price');
            $product->text('content');
            $product->integer('bought');
            $product->string('link');
            $product->float('stars');
            $product->string('photos');
            $product->timestamps();
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
