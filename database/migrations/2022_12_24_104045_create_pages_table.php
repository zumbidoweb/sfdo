<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->boolean('is_published')->default(true);
            $table->string('access')->default('public')->nullable();

            $table->string('title');
            $table->string('slug')->nullable();
            $table->string('icon')->nullable();
            $table->text('description')->nullable();
            $table->string('template')->nullable();
            $table->json('menu')->nullable();

            $table->json('content')->nullable();
            $table->integer('order')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pages');
    }
};
