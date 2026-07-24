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
        Schema::table('users', function (Blueprint $table) {
            $table->string('npm')->nullable()->unique()->after('phone_number');
            $table->date('birth_date')->nullable()->after('npm');
            $table->text('bio')->nullable()->after('birth_date');
            $table->string('cv_path')->nullable()->after('bio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['npm', 'birth_date', 'bio', 'cv_path']);
        });
    }
};
