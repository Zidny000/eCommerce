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
            $table->longText('image');
            $table->string('price');

            $table->string('type');
            $table->longText('details');
            $table->string('operating');
            $table->string('display');
            $table->string('processor');
            $table->string('processor_tech');
            $table->string('graphics');
            $table->string('memory');
            $table->string('hard_drive');
            $table->string('wireless');
            $table->string('power_supply');
            $table->string('battery');
            $table->string('sort1');
            $table->string('sort2');
            $table->string('sort3');


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
