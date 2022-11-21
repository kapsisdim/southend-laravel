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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('order_number')->unique();
            $table->text('comment')->nullable();
            $table->text('coupon')->nullable();
            $table->enum('payment_method',['cash','credit','paypal']);
            $table->boolean('payment_status')->default(0);
            $table->enum('order_status',['pending','failed','completed'])->default('pending');
            $table->float('total', 8, 2);

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('shipping_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('shipping_id')->references('id')->on('shippings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
