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
        Schema::create('products', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string("name", 60);
            $table->string("code", 60);
            $table->bigInteger("categorie_id")->unsigned();
            $table->string("description", 200)->default("Sin descripción");
            $table->string('image')->nullable();
            $table->integer("price")->default(0.0);
            $table->timestamps();

            // Llave foránea a tabla categorías
            $table->foreign("categorie_id")->references("id")->on("categories")->onDelete("cascade");
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
