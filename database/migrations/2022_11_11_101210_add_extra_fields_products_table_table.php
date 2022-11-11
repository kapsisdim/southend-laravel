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
        Schema::table('products', function (Blueprint $table) {
            $table->string('slug')->after('price')->unique();
            $table->float('discount')->nullabale()->after('price');
            $table->boolean('status')->default(1)->after('price');
            $table->enum('condition',['default','new','hot'])->default('default')->after('price');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function ($table) {
            $table->dropColumn('slug');
            $table->dropColumn('status');
            $table->dropColumn('discount');
            $table->dropColumn('condition');
        });
    }
};
