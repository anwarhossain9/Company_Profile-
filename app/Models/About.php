<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class About extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'company_dream',
        'image_related_company',
        'company_story',
        'story_related_image',
        'goal',
        'purpose',
        'mission_vission',
        'ceo_image',
        'ceo_name',
        'ceo_word',
        'status'
        
    ];

     public static function saveOrUpdateAbout($request, $id = null)
    {
       About::updateOrCreate(['id' => $id], [
            
            'image_related_company' =>fileUpload($request->file('image_related_company'), 'about', isset($id) ? static::find($id)->image_related_company : ''),
            'story_related_image'   =>fileUpload($request->file('story_related_image'), 'about', isset($id) ? static::find($id)->story_related_image : ''),
            'company_dream'         => $request->company_dream,
            'company_story'         => $request->company_story,
            'goal'                  => $request->goal,
            'purpose'               => $request->purpose,
            'mission_vission'       => $request->mission_vission,
            'ceo_name'              => $request->ceo_name,
            'ceo_image'             =>fileUpload($request->file('ceo_image'), 'about', isset($id) ? static::find($id)->ceo_image : ''),
            'ceo_word'              => $request->ceo_word,
            'status'                => $request->status == 'on' ? 1 : 0,
        ]);
}
}
