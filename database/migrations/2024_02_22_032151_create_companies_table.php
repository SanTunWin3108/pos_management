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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('name')->default('Laravel POS');
            $table->string('address')->default('Yangon');
            $table->string('phone')->default('09 123456789');
            $table->string('email')->default('laravelpos@lpos.com');
            $table->string('fax')->default('+44 161 999 8888');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
