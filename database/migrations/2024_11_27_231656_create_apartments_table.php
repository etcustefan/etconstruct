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
        Schema::create('apartments', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->enum('type', ['studio', '1-bedroom', '2-bedroom', '3-bedroom']);
            $table->text('description')->nullable();
            $table->integer('square_meters');
            $table->integer('rooms')->nullable();
            $table->unsignedBigInteger('company_id');

            $table->foreign('company_id')->references('id')->on('company_infos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apartments');
    }
};
