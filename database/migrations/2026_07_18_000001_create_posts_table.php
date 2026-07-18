<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->uuid('id_role')->primary();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('divisions', function (Blueprint $table) {
            $table->uuid('id_division')->primary();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->uuid('id_post')->primary();
            $table->foreignUuid('id_user')->constrained('users', 'id_user');
            $table->foreignUuid('id_role')->constrained('roles', 'id_role');
            $table->foreignUuid('id_division')->constrained('divisions', 'id_division');
            $table->string('npm');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('profile_image')->nullable();
            $table->date('birth_date')->nullable();
            $table->string('cv')->nullable();
            $table->text('description')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('informations', function (Blueprint $table) {
            $table->uuid('id_information')->primary();
            $table->foreignUuid('id_post')->constrained('posts', 'id_post');
            $table->text('description')->nullable();
            $table->string('file')->nullable();
            $table->string('bidang')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->uuid('id_project')->primary();
            $table->foreignUuid('id_post')->constrained('posts', 'id_post');
            $table->foreignUuid('id_division')->constrained('divisions', 'id_division');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('url_project')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('project_images', function (Blueprint $table) {
            $table->uuid('id_project_image')->primary();
            $table->foreignUuid('id_project')->constrained('projects', 'id_project');
            $table->integer('slot')->nullable();
            $table->string('image_url');
            $table->timestamps();
        });

        Schema::create('presensis', function (Blueprint $table) {
            $table->uuid('id_presensi')->primary();
            $table->foreignUuid('id_post')->constrained('posts', 'id_post');
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('role')->nullable();
            $table->dateTime('open_at')->nullable();
            $table->dateTime('close_at')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('status_presensis', function (Blueprint $table) {
            $table->uuid('id_status_presensi')->primary();
            $table->string('name');
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('list_presensis', function (Blueprint $table) {
            $table->uuid('id_list_presensi')->primary();
            $table->foreignUuid('id_post')->constrained('posts', 'id_post');
            $table->foreignUuid('id_presensi')->constrained('presensis', 'id_presensi');
            $table->foreignUuid('id_status_presensi')->constrained('status_presensis', 'id_status_presensi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('list_presensis');
        Schema::dropIfExists('status_presensis');
        Schema::dropIfExists('presensis');
        Schema::dropIfExists('project_images');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('informations');
        Schema::dropIfExists('posts');
        Schema::dropIfExists('divisions');
        Schema::dropIfExists('roles');
    }
};
