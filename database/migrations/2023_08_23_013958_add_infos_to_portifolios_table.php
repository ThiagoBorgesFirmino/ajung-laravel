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
        Schema::table('portifolios', function (Blueprint $table) {
            $table->string('client');
            $table->string('services')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('portifolios', function (Blueprint $table) {
            $table->dropColumn('client');
            $table->dropColumn('services');
        });
    }
};
