<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Facility extends Model
{
    use HasFactory;
     use SoftDeletes;

    protected $fillable = [
             'facility_image',
             'facility_title',
             'facility_description',
             'status' 
            ];


    public static function saveOrUpdateFacility($request, $id = null)
    {
       Facility::updateOrCreate(['id' => $id], [
            'facility_image'         =>fileUpload($request->file('facility_image'), 'facility-card', isset($id) ? static::find($id)->facility_image : ''),
            'facility_title'         => $request->facility_title,
            'facility_description'   => $request->facility_description,
            'status'                 => $request->status == 'on' ? 1 : 0,
        ]);
}
}
