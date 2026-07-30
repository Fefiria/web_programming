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
        Schema::create('membership_applications', function (Blueprint $table) {
            $table->uuid('id_application')->primary();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number');
            $table->string('npm')->unique();
            $table->date('birth_date');
            $table->string('bio_url');
            $table->string('bio_public_id');
            $table->string('cv_url');
            $table->string('cv_public_id');
            $table->string('password');
            $table->enum('status', ['pending', 'approved', 'rejected'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('membership_aplications');
    }
};
