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
        
        'logo_image',
        'status'
        
    ];

     public static function saveOrUpdateLogo($request, $id = null)
    {
       Logo::updateOrCreate(['id' => $id], [
            
            'logo_image'   =>fileUpload($request->file('logo_image'), 'logo', isset($id) ? static::find($id)->logo_image : ''),
            'status'       => $request->status == 'on' ? 1 : 0,
        ]);
}
}
