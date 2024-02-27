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
        Schema::create('student_data', function (Blueprint $table) {
            $table->integer('id');
            $table->string('fname',20);
            $table->string('lname',20);
            $table->string('email',50);
            $table->string('password',20);
            $table->string('confpassword',20);
            $table->unsignedBigInteger('class');
            $table->foreign('class')->references('id')->on('class_data')->onUpdate('cascade')->onDelete('cascade');
            $table->string('gender',10);
            $table->text('address');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_data');
    }
};
