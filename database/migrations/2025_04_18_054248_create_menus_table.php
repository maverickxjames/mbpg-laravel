<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    public function up(): void
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('title'); // Menu Title
            $table->string('url')->nullable(); // Optional URL
            $table->unsignedBigInteger('parent_id')->nullable(); // Self-reference for submenus
            $table->integer('sort_order')->default(0); // Order of display
            $table->boolean('status')->default(1); // Active/Inactive
            $table->timestamps(); // created_at & updated_at

            // Foreign key constraint to support nested menus
            $table->foreign('parent_id')->references('id')->on('menus')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('menus');
    }
}
