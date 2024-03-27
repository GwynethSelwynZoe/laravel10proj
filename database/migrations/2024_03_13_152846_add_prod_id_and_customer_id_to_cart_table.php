<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProdIdAndCustomerIdToCartTable extends Migration
{
    /**
     * Run the migrations.
     * C:\ComProgProject\Gantsilyo\database\migrations\2024_03_13_152846_add_prod_id_and_customer_id_to_cart_table.php
     */
    public function up(): void
    {
        Schema::table('cart', function (Blueprint $table) {
            $table->unsignedBigInteger('customer_id')->index();
            $table->unsignedBigInteger('prod_id')->index();

            // Define foreign key constraints
            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cart', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
            $table->dropForeign(['prod_id']);
            $table->dropColumn(['customer_id', 'prod_id']);
        });
    }
}
