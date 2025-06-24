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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('office_address');
            $table->string('phone_no');
            $table->string('contact_person_name');
            $table->string('contact_person_designation');
            $table->string('contact_time');
            $table->string('email_link');
            $table->string('facebook_link');
            $table->string('instagram_link');
            $table->string('linkedin_link');
            $table->string('youtube_link');
            $table->string('twitter_link');
            $table->string('google_map_link');
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
        Schema::dropIfExists('contacts');
    }
};
