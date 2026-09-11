<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    protected $connection = 'prayer_times';

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prayer_times', function (Blueprint $table) {
            $table->id('prayer_time_id');
            $table->string('month_number');
            $table->string('day_number');
            $table->string('fajr');
            $table->string('shoruq');
            $table->string('dohr');
            $table->string('asr');
            $table->string('maghrib');
            $table->string('isha');
            $table->integer('city_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prayer_times');
    }
};
