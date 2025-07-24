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
        Schema::create('service_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_id');
            $table->text('service_image');
            $table->text('service_card_title');
            $table->text('service_description');
            $table->tinyInteger('status')->default(0);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_cards');
    }
};
