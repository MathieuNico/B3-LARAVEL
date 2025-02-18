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
        Schema::create('template_contrats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->json('content');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
        });

        Schema::create('contrats', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->date('start_date');
            $table->date('end_date');
            $table->json('content');
            $table->float('monthly_price');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('boxe_id')->nullable();
            $table->foreign('boxe_id')->references('id')->on('boxes')->onDelete('cascade');
            $table->unsignedBigInteger('locataire_id')->nullable();
            $table->foreign('locataire_id')->references('id')->on('locataires')->nullOnDelete();
            $table->unsignedBigInteger('templatecontrat_id')->nullable();
            $table->foreign('templatecontrat_id')->references('id')->on('template_contrats')->constrained('template_contrats')->nullOnDelete();;

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('template_contrats');
        Schema::dropIfExists('contrats');
    }
};
