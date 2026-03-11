<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void {
    Schema::create('countries', function (Blueprint $table) {
        $table->char('country_id', 2)->primary(); // Primary Key as Char(2)
        $table->string('country_name', 40)->nullable();
        $table->foreignId('region_id')->constrained('regions', 'region_id');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('countries');
    }
};
