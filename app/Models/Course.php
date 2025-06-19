<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'course_category',
        'course_type',
        'batch_no',
        'course_name',
        'course_image',
        'starts_date',
        'deadline',
        'duration',
        'class_per_week',
        'previous_price',
        'current_price',
        'total_class',
        'total_hours',
        'available_seat',
        'schedule',
        'venue',
        'installment1_amount',
        'installment2_amount',
        'instructor_name',
        'instructor_social_media',
        'eligibility',
        'short_description',
        'long_description',
        'curriculum',
        'faqs',
        'reason_of_choosing_this_course',
        'job_sectors_title',
        'job_sectors_description'
    ];

    
    public static function saveOrUpdateCourse($request, $id = null)
    {
        Course::updateOrCreate(['id' => $id], [
            'course_category'                => $request->course_category,
            'course_type'                    => $request->course_type,
            'batch_no'                       => $request->batch_no,
            'course_name'                    => $request->course_name,
            'course_image'                   =>fileUpload($request->file('course_image'), 'course', isset($id) ? static::find($id)->course : ''),
            'starts_date'                    => $request->starts_date,
            'deadline'                       => $request->deadline,
            'duration'                       => $request->duration,
            'class_per_week'                 => $request->class_per_week,
            'previous_price'                 => $request->previous_price,
            'current_price'                  => $request->current_price,
            'total_class'                    => $request->total_class,
            'total_hours'                    => $request->total_hours,
            'available_seat'                 => $request->available_seat,
            'schedule'                       => $request->schedule,
            'venue'                          => $request->venue,
            'installment1_amount'            => $request->installment1_amount,
            'installment2_amount'            => $request->installment2_amount,
            'instructor_name'                => $request->instructor_name,
            'instructor_social_media'        => $request->instructor_social_media,
            'eligibility'                    => $request->eligibility,
            'curriculum'                     => $request->curriculum,
            'faqs'                           => $request->faqs,
            'reason_of_choosing_this_course' => $request->reason_of_choosing_this_course,
            'job_sectors_title'              => $request->job_sectors_title,
            'job_sectors_description'        => $request->job_sectors_description,
            'short_description'              => $request->short_description,
            'long_description'               => $request->long_description,
            'status'                         => $request->status == 'on' ? 1 : 0,
        ]);
}

}
