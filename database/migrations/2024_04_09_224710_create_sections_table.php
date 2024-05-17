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
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->string('image')->nullable();
            $table->text('featured_title')->nullable();
            $table->text('subtitle')->nullable();
            $table->text('label')->nullable();
            $table->string('link')->nullable();
            $table->text('description')->nullable();
            $table->boolean('status')->default(true);
            $table->string('bg_color')->nullable();
            $table->string('text_color')->nullable();
            $table->string('position')->nullable();
            $table->text('embeded_video')->nullable();
            $table->string('type')->unique()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
