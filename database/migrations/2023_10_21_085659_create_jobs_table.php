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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('j_name')->nullable();
            $table->string('j_slug')->nullable();
            $table->string('j_address')->nullable();
            $table->string('j_email')->nullable();
            $table->string('j_phone')->nullable();
            $table->string('j_hash_slug')->nullable()->index();
            $table->integer('j_career_id')->default(0);
            $table->integer('j_employer_id')->default(0);
            $table->integer('j_company_id')->default(0);
            $table->integer('j_experience_id')->default(0);
            $table->integer('j_rank_id')->default(0);
            $table->integer('j_form_of_work_id')->default(0);
            $table->integer('j_salary')->default(0);
            $table->tinyInteger('j_ot')->default(1);
            $table->tinyInteger('j_status')->default(1);
            $table->integer('j_admin_id')->default(0);
            $table->date('j_time')->nullable();
            $table->text('j_description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
