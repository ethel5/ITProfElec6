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
        Schema::create('employees', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('last_name', 45);
            $table->string('first_name', 45);
            $table->string('middle_name', 45)->nullable();
            $table->string('position');
            $table->date('birthdate');
            $table->integer('age')->unsigned();
            $table->string('civil_status', 15);
            $table->string('gender', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
