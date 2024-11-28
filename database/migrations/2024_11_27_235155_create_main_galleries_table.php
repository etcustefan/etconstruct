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
        Schema::create('main_galleries', function (Blueprint $table) {
            $table->id();
            $table->string('image_path');
            $table->string('video_path')->nullable();
            $table->string('heading_text')->nullable();
            $table->string('text')->nullable();
            $table->string('button_text')->nullable();
            $table->string('button_action')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_galleries');
    }
};
