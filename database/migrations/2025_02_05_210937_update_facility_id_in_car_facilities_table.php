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
        Schema::table('car_facilities', function (Blueprint $table) {
            // Drop the existing facility_id column if it exists
            if (Schema::hasColumn('car_facilities', 'facility_id')) {
                $table->dropColumn('facility_id');
            }

            // Add the facility_id column as a foreign key
            $table->foreignId('facility_id')->constrained('facilities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('car_facilities', function (Blueprint $table) {
            // Drop the facility_id column
            $table->dropForeign(['facility_id']);
            $table->dropColumn('facility_id');
        });
    }
};
