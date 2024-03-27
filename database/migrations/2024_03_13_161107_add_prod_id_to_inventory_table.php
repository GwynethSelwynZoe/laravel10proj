<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * C:\ComProgProject\Gantsilyo\database\migrations\2024_03_13_161107_add_prod_id_to_inventory_table.php
     */
    public function up(): void
    {
        Schema::table('inventory', function (Blueprint $table) {
            $table->unsignedBigInteger('prod_id')->index();
            $table->foreign('prod_id')->references('id')->on('product')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventory', function (Blueprint $table) {
            //
        });
    }
};
