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
        'short_description',
        'occupation_name',
        'registration_link',
        'benefits_conditions',
        'necessary_documents',
        'status'
        
    ];

     public static function saveOrUpdateAsset($request, $id = null)
    {  
       Asset::updateOrCreate(['id' => $id], [
            'asset_category_id'   => $request->asset_category_id,
            'top_image'           =>fileUpload($request->file('top_image'), 'asset', isset($id) ? static::find($id)->top_image : ''),
            'title'               => $request->title,
            'short_description'   => $request->short_description,
            'occupation_name'     => $request->occupation_name,
            'registration_link'   => $request->registration_link,
            'benefits_conditions' => $request->benefits_conditions,
            'necessary_documents' => $request->necessary_documents,
            'status'              => $request->status == 'on' ? 1 : 0
        ]);
}
}
