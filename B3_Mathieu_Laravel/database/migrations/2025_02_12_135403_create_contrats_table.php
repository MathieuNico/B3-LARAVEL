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
        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('start_date');
            $table->date('end_date');
            $table->float('price');
            $table->unsignedBigInteger('boxe_id')->nullable();
            $table->foreign('boxe_id')->references('id')->on('boxes');
            $table->unsignedBigInteger('locataire_id')->nullable();
            $table->foreign('locataire_id')->references('id')->on('locataires');
            $table->unsignedBigInteger('templatecontrat_id')->nullable();
            $table->foreign('templatecontrat_id')->references('id')->on('templatecontrats');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contrats');
    }
};
