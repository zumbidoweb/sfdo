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
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('order')->nullable();
        });

        Schema::create('question_section', function (Blueprint $table) {
            $table->integer("question_id")->unsigned();
            $table->foreign("question_id")->references('id')->on('questions')->onDelete('cascade');

            $table->integer("section_id")->unsigned();
            $table->foreign("section_id")->references('id')->on('sections')->onDelete('cascade');
            $table->index(["section_id", "question_id"]);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('question_section');
        Schema::dropIfExists('questions');
    }
};
