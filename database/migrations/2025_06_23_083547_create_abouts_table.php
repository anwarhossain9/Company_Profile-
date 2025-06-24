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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('company_dream');
            $table->text('image_related_company');
            $table->string('company_story');
            $table->text('story_related_image');
            $table->string('goal');
            $table->string('purpose');
            $table->string('mission_vission');
            $table->text('ceo_image');
            $table->string('ceo_name');
            $table->string('ceo_word');
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
        Schema::dropIfExists('abouts');
    }
};
