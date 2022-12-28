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
        Schema::create('quizzes', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('is_published')->default(true);
            $table->string('access')->default('restricted')->nullable();

            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->string('code')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();

            $table->text('description')->nullable();
            $table->longText('content')->nullable();
            $table->integer('order')->nullable();

            $table->timestamp('opens_at')->nullable();
            $table->timestamp('closes_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
};
