<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ServiceCard extends Model
{
    use HasFactory;
     use SoftDeletes;

    protected $fillable = [
             'service_id' ,
             'service_image',
             'service_card_title',
             'service_description',
             'status' 
            ];


    public static function saveOrUpdateServiceCard($request, $id = null)
    {
       ServiceCard::updateOrCreate(['id' => $id], [
            'service_id'            => $request->service_id,
            'service_image'         =>fileUpload($request->file('service_image'), 'service-card', isset($id) ? static::find($id)->service_image : ''),
            'service_card_title'    => $request->service_card_title,
            'service_description'   => $request->service_description,
            'status'                => $request->status == 'on' ? 1 : 0,
        ]);
}

public function service()
    {
        return $this->belongsTo(Service::class);
    }


        }
