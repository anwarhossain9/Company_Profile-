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
            $table->text('company_story');
            $table->text('story_related_image');
            $table->text('goal');
            $table->text('purpose');
            $table->text('vission');
            $table->text('mission');
            $table->text('ceo_image');
            $table->string('ceo_name');
            $table->string('ceo_designation');
            $table->text('ceo_word');
            $table->text('director_image');
            $table->string('director_name');
            $table->string('director_designation');
            $table->text('director_word');
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
