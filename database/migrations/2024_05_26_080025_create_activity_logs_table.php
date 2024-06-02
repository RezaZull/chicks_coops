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
        Schema::create('activity_logs', function (Blueprint $table) {
            $table->id();
            $table->string('log_name');
            $table->text('description');
            $table->unsignedBigInteger('subject_id');
            $table->string('subject_type');
            $table->unsignedBigInteger('causer_id');
            $table->string('causer_type');
            $table->json('properties')->nullable();
            $table->index(['log_name']);
            $table->index(['subject_id', 'subject_type']);
            $table->index(['causer_id', 'causer_type']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('activity_logs');
    }
};
