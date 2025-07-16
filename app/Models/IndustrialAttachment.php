<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndustrialAttachment extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'industrial_attachment_category_id',
        'batch_no',
        'industrial_attachment_course_name',
        'industrial_attachment_course_image',
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
        'instructor_image',
        'instructor_description',
        'instructor_designation',
        'instructor_email_link',
        'instructor_facebook_link',
        'instructor_linkdin_link',
        'instructor_twiter_link',
        'eligibility',
        'short_description',
        'long_description',
        'curriculum',
        'faqs',
        'reason_of_choosing_this_industrial_attachment',
        'job_sectors_title',
        'job_sectors_description',
        'status'
    ];

    
    public static function saveOrUpdateIndustrialAttachment($request, $id = null)
    {
        IndustrialAttachment::updateOrCreate(['id' => $id], [
            'industrial_attachment_category_id'             => $request->industrial_attachment_category_id,
            'batch_no'                                      => $request->batch_no,
            'industrial_attachment_course_name'             => $request->industrial_attachment_course_name,
            'industrial_attachment_course_image'            =>fileUpload($request->file('industrial_attachment_course_image'), 'industrial-attachment', isset($id) ? static::find($id)->industrial_attachment_course_image : ''),
            'starts_date'                                   => $request->starts_date,
            'deadline'                                      => $request->deadline,
            'duration'                                      => $request->duration,
            'class_per_week'                                => $request->class_per_week,
            'previous_price'                                => $request->previous_price,
            'current_price'                                 => $request->current_price,
            'total_class'                                   => $request->total_class,
            'total_hours'                                   => $request->total_hours,
            'available_seat'                                => $request->available_seat,
            'schedule'                                      => $request->schedule,
            'venue'                                         => $request->venue,
            'installment1_amount'                           => $request->installment1_amount,
            'installment2_amount'                           => $request->installment2_amount,
            'instructor_name'                               => $request->instructor_name,
            'instructor_image'                              => fileUpload($request->file('instructor_image'), 'course', isset($id) ? static::find($id)->instructor_image : ''),
            'instructor_description'                        => $request->instructor_description,
            'instructor_designation'                        => $request->instructor_designation,
            'instructor_email_link'                         => $request->instructor_email_link,
            'instructor_facebook_link'                      => $request->instructor_facebook_link,
            'instructor_linkdin_link'                       => $request->instructor_linkdin_link,
            'instructor_twiter_link'                        => $request->instructor_twiter_link,
            'eligibility'                                   => $request->eligibility,
            'curriculum'                                    => $request->curriculum,
            'faqs'                                          => $request->faqs,
            'reason_of_choosing_this_industrial_attachment' => $request->reason_of_choosing_this_industrial_attachment,
            'job_sectors_title'                             => $request->job_sectors_title,
            'job_sectors_description'                       => $request->job_sectors_description,
            'short_description'                             => $request->short_description,
            'long_description'                              => $request->long_description,
            'status'                                        => $request->status == 'on' ? 1 : 0,
        ]);
}


public function industrialAttachmentCategory()
    {
        return $this->belongsTo(IndustrialAttachmentCategory::class);
    }


}
