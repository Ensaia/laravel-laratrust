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
        Schema::create('default_setting', function (Blueprint $table) {
            $table->id('default_id');
            $table->integer('city_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('default_setting');
    }
};
