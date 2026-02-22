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

            $table->text('bio')->nullable()->after('email');
            $table->string('profile_image')->nullable()->after('bio');
            $table->string('job_title')->nullable()->after('profile_image');
            $table->string('github_link')->nullable()->after('job_title');
            $table->string('linkedin_link')->nullable()->after('github_link');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {

            $table->dropColumn(['bio', 'profile_image', 'job_title', 'github_link', 'linkedin_link']);
        });
    }
};
