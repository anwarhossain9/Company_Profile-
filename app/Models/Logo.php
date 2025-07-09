<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Logo extends Model
{
    use HasFactory;
     use SoftDeletes;

    protected $fillable = [
        
        'logo_image1',
        'logo_image2',
        'status'
        
    ];

     public static function saveOrUpdateLogo($request, $id = null)
    {
       Logo::updateOrCreate(['id' => $id], [
            
            'logo_image1'   =>fileUpload($request->file('logo_image1'), 'logo', isset($id) ? static::find($id)->logo_image1 : ''),
            'logo_image2'   =>fileUpload($request->file('logo_image2'), 'logo', isset($id) ? static::find($id)->logo_image2 : ''),
            'status'       => $request->status == 'on' ? 1 : 0,
        ]);
}
}
