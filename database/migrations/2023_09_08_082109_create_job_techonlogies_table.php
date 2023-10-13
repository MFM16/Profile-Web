<?php

use App\Models\Experiance;
use App\Models\Technology;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('job_techonlogies', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Experiance::class);
            $table->foreignIdFor(Technology::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_techonlogies');
    }
};
