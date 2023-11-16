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
        Schema::create('detail_facture', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('facture_id')->unsigned();
            $table->bigInteger('product_id')->unsigned();
            $table->integer('quantity');
            $table->decimal('price', 10, 2);
            $table->timestamps();

            $table->foreign('facture_id')->references('id')->on('factures')->onDelete('cascade');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
