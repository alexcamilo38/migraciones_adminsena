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
        Schema::create('environment_course', function (Blueprint $table) {
            $table->id();
             
            $table->unsignedBigInteger('environment_id')->nullable();
            $table->foreign('environment_id')
           ->references('id')
           ->on('environments')
           ->onDelete('set null')
           ->onUpdate('set null');

           $table->unsignedBigInteger('course_id')->nullable();

           $table->foreign('course_id')
           ->references('id')
           ->on('courses')
           ->onDelete('set null')
           ->onUpdate('set null');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('environment_course');
    }
};
