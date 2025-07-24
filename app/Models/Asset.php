<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'asset_category_id',
        'top_image',
        'title',
        'short_description_asset',
        'occupation_name',
        'registration_link',
        'batch_no',
        'asset_occupation_image',
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
        'reason_of_choosing_this_course',
        'job_sectors_title',
        'job_sectors_description',
        'benefits_conditions',
        'necessary_documents',
        'status'
        
    ];

     public static function saveOrUpdateAsset($request, $id = null)
    {  
       Asset::updateOrCreate(['id' => $id], [
            'asset_category_id'              => $request->asset_category_id,
            'top_image'                      =>fileUpload($request->file('top_image'), 'asset', isset($id) ? static::find($id)->top_image : ''),
            'title'                          => $request->title,
            'short_description_asset'        => $request->short_description_asset,
            'occupation_name'                => $request->occupation_name,
            'registration_link'              => $request->registration_link,
            'batch_no'                       => $request->batch_no,
            'asset_occupation_image'         =>fileUpload($request->file('asset_occupation_image'), 'asset', isset($id) ? static::find($id)->asset_occupation_image : ''),
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
            'instructor_image'               => fileUpload($request->file('instructor_image'), 'course', isset($id) ? static::find($id)->instructor_image : ''),
            'instructor_description'         => $request->instructor_description,
            'instructor_designation'         => $request->instructor_designation,
            'instructor_email_link'          => $request->instructor_email_link,
            'instructor_facebook_link'       => $request->instructor_facebook_link,
            'instructor_linkdin_link'        => $request->instructor_linkdin_link,
            'instructor_twiter_link'         => $request->instructor_twiter_link,
            'eligibility'                    => $request->eligibility,
            'curriculum'                     => $request->curriculum,
            'faqs'                           => $request->faqs,
            'reason_of_choosing_this_course' => $request->reason_of_choosing_this_course,
            'job_sectors_title'              => $request->job_sectors_title,
            'job_sectors_description'        => $request->job_sectors_description,
            'short_description'              => $request->short_description,
            'long_description'               => $request->long_description,
            'benefits_conditions'            => $request->benefits_conditions,
            'necessary_documents'            => $request->necessary_documents,
            'status'                         => $request->status == 'on' ? 1 : 0
        ]);
}

public function assetCategory()
    {
        return $this->belongsTo(AssetCategory::class);
    }


}
