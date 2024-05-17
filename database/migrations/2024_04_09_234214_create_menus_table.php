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
        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('label');
            $table->string('url');
            $table->char('type');
            $table->string('placement')->nullable();
            $table->integer('sort_order')->nullable();
            $table->integer('parent_id')->nullable();
            $table->string('icon')->nullable();
            $table->boolean('new_window')->default(false);
            $table->integer('status')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menuss');
    }
};
