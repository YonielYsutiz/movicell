<?php

namespace App\Http\Requests;

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
        Schema::create('technical', function (Blueprint $table) {
            $table->id();
            $table->string('firts_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('token');
            $table->string('strong_points')->nullable();
            $table->string('type_document');
            $table->string('nro_document')->unique();
            $table->string('number_phone');
            $table->date('contract_start');
            $table->date('contract_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technical');
    }
};
