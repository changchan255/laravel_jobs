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
        Schema::create('apply_job', function (Blueprint $table) {
            $table->id();
            $table->string('aj_name')->nullable();
            $table->string('aj_phone')->nullable();
            $table->string('aj_email')->nullable();
            $table->integer('aj_user_id')->default(0);
            $table->integer('aj_job_id')->default(0);
            $table->string('aj_hash_slug')->nullable();
            $table->integer('aj_company_id')->default(0);
            $table->integer('aj_employer_id')->default(0);
            $table->string('aj_file_cv')->nullable();
            $table->longText('aj_about')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_job');
    }
};
