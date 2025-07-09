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
            $table->text('office_address');
            $table->string('phone_no');
            $table->string('contact_person_name');
            $table->string('contact_person_designation');
            $table->string('contact_time');
            $table->text('email_link');
            $table->text('facebook_link');
            $table->text('instagram_link');
            $table->text('linkedin_link');
            $table->text('youtube_link');
            $table->text('twitter_link');
             $table->text('tictok_link');
            $table->text('google_map_link');
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
