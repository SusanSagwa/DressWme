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
            $table->String('name');
            $table->String('slug')->unique();
            $table->String('Description')->nullable();
            $table->text('info');
            $table->decimal('regular_price');
            $table->String('sale_price')->nullable();
            $table->String('SKU');
            $table->enum('status',['instock', 'outstock']);
            $table->boolean('Featured')->default(false);
            $table->unsignedInteger('quantity')->default(10);
            $table->String('image')->nullable();
            $table->text('images')->nullable();
            $table->bigInteger('category_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
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
