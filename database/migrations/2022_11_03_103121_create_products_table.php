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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->unsignedBigInteger('list_image_id');
            $table->bigInteger('sku')->nullable();
            $table->float('price', 8, 2);
            $table->string('slug')->unique();
            $table->bigInteger('discount')->nullable();
            $table->boolean('status')->default(1);
            $table->enum('condition',['default','new','hot'])->default('default');
            $table->string('description')->nullable();
            $table->text('body')->nullable();
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
};
