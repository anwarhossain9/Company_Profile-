<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'service_category_id',
        'service_provider_name',
        'description',
        'image',
        'service_image',
        'service_title',
        'service_description',
        'note',
        'status'
        
    ];

     public static function saveOrUpdateService($request, $id = null)
    {
       Service::updateOrCreate(['id' => $id], [
            'service_category_id'   => $request->service_category_id,
            'service_provider_name' => $request->service_provider_name,
            'description'           =>$request->description,
            'image'                 =>fileUpload($request->file('image'), 'studentReview', isset($id) ? static::find($id)->image : ''),
            'service_image'         =>fileUpload($request->file('service_image'), 'service', isset($id) ? static::find($id)->service_image : ''),
            'service_title'         => $request->service_title,
            'service_description'   => $request->service_description,
            'note'                  => $request->note,
            'status'                => $request->status == 'on' ? 1 : 0,
        ]);
}

public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }


}
