<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Product', function (Blueprint $table) {
            $table->increments('product_id')->unique();
            $table->string('model',255);
            $table->integer('quantity');
            $table->string('image');
            $table->decimal('price',15,8);
            $table->date('date_available');
            $table->decimal('weight',15,8);
            $table->decimal('length','15','8');
            $table->decimal('width','15','8');
            $table->tinyInteger('status');
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
        Schema::dropIfExists('Product');
    }
}
