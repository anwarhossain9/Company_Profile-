<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Achievement extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'achievement_title',
        'achievement_image',
        'achievement_description',
        'status'
        
    ];

    public static function saveOrUpdateAchievement($request, $id = null)
    {
        Achievement::updateOrCreate(['id' => $id], [
            'achievement_title'       => $request->achievement_title,
            'achievement_image'       =>fileUpload($request->file('achievement_image'), 'achievement', isset($id) ? static::find($id)->achievement_image : ''),
            'achievement_description' => $request->achievement_description,
            'status'                  => $request->status == 'on' ? 1 : 0,
        ]);
}
}
