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
        Schema::create('email_archives', function (Blueprint $table) {
            $table->id();
            $table->string('subject')->nullable();
            $table->text('to')->nullable(); // JSON ou string d'adresses
            $table->text('cc')->nullable();
            $table->text('bcc')->nullable();
            $table->longText('body')->nullable(); // HTML ou texte
            $table->string('type')->nullable(); // sent | received
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('email_archives');
    }
};
