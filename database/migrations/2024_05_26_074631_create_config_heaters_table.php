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
        Schema::create('config_heaters', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('device_id');
            $table->enum('mode', ['manual', 'automatic']);
            $table->boolean('status');
            $table->float('max_temp')->nullable();
            $table->float('min_temp')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_heaters');
    }
};
