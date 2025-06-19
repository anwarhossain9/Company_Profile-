<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'banner_image',
        'banner_title',
        'banner_description',
        
    ];

     public static function saveOrUpdateBanner($request, $id = null)
    {
       Banner::updateOrCreate(['id' => $id], [
            
            'banner_image'        =>fileUpload($request->file('banner_image'), 'banner', isset($id) ? static::find($id)->banner : ''),
            'banner_title'        => $request->banner_title,
            'banner_description'  => $request->banner_description,
            'status'              => $request->status == 'on' ? 1 : 0,
        ]);
}

}
