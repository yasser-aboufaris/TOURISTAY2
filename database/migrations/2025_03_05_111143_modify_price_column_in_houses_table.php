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
        Schema::table('houses', function (Blueprint $table) {
            // Use USING to explicitly cast the column to integer
            $table->string('price')->change();
        });

        DB::statement('ALTER TABLE houses ALTER COLUMN price TYPE integer USING price::integer');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('houses', function (Blueprint $table) {
            $table->string('price')->change(); // Revert back to string if needed
        });
    }
};
