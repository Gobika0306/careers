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
        Schema::create('jobopening', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->string('Description');
            $table->integer('Vacancy');
            $table->string('Location');
            $table->string('Type');
            $table->unsignedBigInteger('DepartmentId');
            $table->foreign('DepartmentId')->references('id')->on('departments');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobopening');
    }
};

