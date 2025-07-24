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
        Schema::create('assets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('asset_category_id');
            $table->text('top_image');
            $table->text('title');
            $table->text('short_description_asset');
            $table->string('occupation_name');
            $table->text('registration_link');
            $table->string('batch_no');
            $table->text('asset_occupation_image');
            $table->string('starts_date');
            $table->string('deadline');
            $table->string('duration');
            $table->string('class_per_week');
            $table->string('previous_price');
            $table->string('current_price');
            $table->string('total_class');
            $table->string('total_hours');
            $table->string('available_seat');
            $table->text('schedule');
            $table->string('venue');
            $table->string('installment1_amount');
            $table->string('installment2_amount');
            $table->string('instructor_name');
            $table->string('instructor_image');
            $table->text('instructor_description');
            $table->string('instructor_designation');
            $table->text('instructor_email_link');
            $table->text('instructor_facebook_link');
            $table->text('instructor_linkdin_link');
            $table->text('instructor_twiter_link');          
            $table->text('eligibility');
            $table->text('short_description');
            $table->text('long_description');
            $table->text('curriculum');
            $table->text('faqs');
            $table->text('reason_of_choosing_this_course');
            $table->text('job_sectors_title');
            $table->text('job_sectors_description');
            $table->text('benefits_conditions');
            $table->text('necessary_documents');
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
        Schema::dropIfExists('assets');
    }
};
