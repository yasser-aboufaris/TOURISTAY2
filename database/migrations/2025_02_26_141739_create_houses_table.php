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
        Schema::create('houses', function (Blueprint $table) {
            $table->id();
            $table->integer('id_owner');
            $table->foreign('id_owner')->references('id')->on('users');
            $table->string('title');
            $table->integer('id_categorie');
            $table->foreign('id_categorie')->references('id')->on('categories');
            $table->string('description');
            $table->string('price');
            $table->string('image');
            $table->date('contract_start'); // Start of contract
            $table->date('contract_end');   // End of contract
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houses');
    }
};
