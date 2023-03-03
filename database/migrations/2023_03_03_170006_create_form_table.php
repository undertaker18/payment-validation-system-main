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
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('email')->unique();
            $table->varchar('student_type')();
            $table->varchar('department')();
            $table->varchar('grade_course')();
            $table->varchar('level_year')();
            $table->varchar('scholarship_status')();
            $table->blob('receipt_image')();
            $table->varchar('payment_for')();
            $table->integer('amount_payment')();
            $table->integer('reference_number')();
            $table->date('datetime_of_Payment')();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
