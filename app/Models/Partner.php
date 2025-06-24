<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Partner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'partner_image',
        'status'
        
    ];

     public static function saveOrUpdatePartner($request, $id = null)
    {
       Partner::updateOrCreate(['id' => $id], [
            
            'partner_image'        =>fileUpload($request->file('partner_image'), 'partner', isset($id) ? static::find($id)->partner_image : ''),
            'status'              => $request->status == 'on' ? 1 : 0,
        ]);
}
}
