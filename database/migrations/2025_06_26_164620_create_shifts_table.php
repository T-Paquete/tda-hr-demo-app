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
        Schema::create('shifts', function (Blueprint $table) {
            $table->id();                               # This column is the primary key for the shifts table
            $table->timestamp('start');                 # This column stores the start time of the shift
            $table->timestamp('end');                   # This column stores the end time of the shift
            $table->unsignedBigInteger('employee_id');  # This column stores the ID of the employee assigned to the shift
            $table->timestamps();                       # This will create 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shifts');
    }
};

