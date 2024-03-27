<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('order_list', function (Blueprint $table) {
            $table->unsignedBigInteger('status_id')->index();
            $table->unsignedBigInteger('customer_id')->index();

            // Define foreign key constraints
            $table->foreign('status_id')->references('id')->on('order_status')->onDelete('cascade');
            $table->foreign('customer_id')->references('id')->on('customer')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('order_list', function (Blueprint $table) {
            //
        });
    }
};
