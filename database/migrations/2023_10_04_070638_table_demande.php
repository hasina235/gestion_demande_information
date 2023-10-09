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
        Schema::create('demandes', function (Blueprint $table) {
            $table->increments('Numdemande');
            $table->foreignIdFor(\App\Models\Demandeur::class, 'NumDemandeur');
            $table->foreignIdFor(\App\Models\Service::class, 'NumService');
            $table->string('objet');
            $table->string('detail');
            $table->string('thematique');
            $table->date('datedemande');
            $table->date('dateexpiration');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('demandes');
    }
};
