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
        'service_provider_name',
        'service_title',
        'description',
        'image',
        'note',
        'status'
        
    ];

     public static function saveOrUpdateService($request, $id = null)
    {
       Service::updateOrCreate(['id' => $id], [
            'service_provider_name' => $request->service_provider_name,
            'service_title'         => $request->service_title,
            'description'           =>$request->description,
            'image'                 =>fileUpload($request->file('image'), 'studentReview', isset($id) ? static::find($id)->image : ''),
            'note'                  => $request->note,
            'status'                => $request->status == 'on' ? 1 : 0,
        ]);
}

public function serviceCategory()
    {
        return $this->belongsTo(ServiceCategory::class);
    }


    public function serviceCards()
    {
        return $this->hasMany(ServiceCard::class);
    }

}
