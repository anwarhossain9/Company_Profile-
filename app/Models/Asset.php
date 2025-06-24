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
        
        'top_image',
        'occupation_name',
        'registration_link',
        'benefits_conditions',
        'necessary_documents'
        
    ];

     public static function saveOrUpdateAsset($request, $id = null)
    {
       Asset::updateOrCreate(['id' => $id], [
            
            'top_image'           =>fileUpload($request->file('top_image'), 'asset', isset($id) ? static::find($id)->asset : ''),
            'occupation_name'     => $request->occupation_name,
            'registration_link'   => $request->registration_link,
            'benefits_conditions' => $request->benefits_conditions,
            'necessary_documents' => $request->necessary_documents,
            'status'              => $request->status == 'on' ? 1 : 0,
        ]);
}
}
