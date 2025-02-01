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
        Schema::create('patient_profiles', function (Blueprint $table) {
            $table->id();
            $table->longText('home_address');
            $table->string('contact_number');
            $table->string('emergency_contact_number');
            $table->unsignedBigInteger('gender_id');
            $table->unsignedBigInteger('blood_group_id');
            $table->unsignedBigInteger('patient_id');
            $table->timestamps();

            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
            $table->foreign('blood_group_id')->references('id')->on('blood_groups')->onDelete('cascade');
            $table->foreign('patient_id')->references('id')->on('patients')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patient_profiles');
    }
};
