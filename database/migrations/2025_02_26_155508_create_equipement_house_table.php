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
        Schema::create('equipement_house', function (Blueprint $table) {
            $table->integer('id_house');
            
            $table->foreign('id_house')->references('id')->on('houses');
            
            $table->integer('id_equipement');
            
            $table->foreign('id_equipement')->references('id')->on('equipements');
                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipement_house');
    }
};
