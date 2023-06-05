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
        Schema::table('apply', function (Blueprint $table) {
            $table->unsignedBigInteger('job_id')->after('user_id')->nullable();
            $table->string('nama_perusahaan')->after('name');
            $table->string('foto')->after('file');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apply', function (Blueprint $table) {
            //
        });
    }
};
