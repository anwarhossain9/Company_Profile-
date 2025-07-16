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
        Schema::create('industrial_attachments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('industrial_attachment_category_id');
            $table->string('batch_no');
            $table->string('industrial_attachment_course_name');
            $table->text('industrial_attachment_course_image');
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
            $table->text('reason_of_choosing_this_industrial_attachment');
            $table->text('job_sectors_title');
            $table->text('job_sectors_description');
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
        Schema::dropIfExists('industrial_attachments');
    }
};
