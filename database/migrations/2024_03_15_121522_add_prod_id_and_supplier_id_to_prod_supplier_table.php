<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * C:\ComProgProject\Gantsilyo\database\migrations\2024_03_15_121522_add_prod_id_and_supplier_id_to_prod_supplier_table.php
     */
    public function up(): void
    {
        Schema::table('prod_supplier', function (Blueprint $table) {
            $table->unsignedBigInteger('prod_id')->index();
            $table->unsignedBigInteger('supplier_id')->index();

            // Define foreign key constraints
            $table->foreign('prod_id')->references('id')->on('products')->onDelete('cascade');
            $table->foreign('supplier_id')->references('id')->on('supplier')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prod_supplier', function (Blueprint $table) {
            //
        });
    }
};
