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
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->float('temperature');
            $table->float('humidity');
            $table->float('heat_index');
            $table->timestampTz('time');
            $table->string('synchronize')->nullable()->default(null);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presensis');
    }
};
