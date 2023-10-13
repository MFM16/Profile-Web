<?php

use App\Models\User;
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
        Schema::create('experiances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class);
            $table->string('duration_of_work');
            $table->string('place');
            $table->string('position')->nullable();
            $table->string('job');
            $table->text('job_desc');
            $table->string('link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('experiances');
    }
};
