<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * C:\ComProgProject\Gantsilyo\database\migrations\2024_03_14_100823_add_order_list_and_prod_id_to_order_item_table.php
     */
    public function up(): void
    {
        Schema::table('order_item', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->index();
            $table->unsignedBigInteger('prod_id')->index();

            // Define foreign key constraints
            $table->foreign('id')->references('id')->on('order_list')->onDelete('cascade');
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_item', function (Blueprint $table) {
            //
        });
    }
};
