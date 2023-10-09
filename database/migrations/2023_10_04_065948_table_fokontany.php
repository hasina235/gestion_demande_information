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
        Schema::create('fokontanys', function (Blueprint $table) {
            $table->integer('CodeFokontany');
            $table->foreignIdFor(\App\Models\Commune::class, 'CodeCommune');
            $table->string('NomFokotany');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fokontanys');
    }
};
