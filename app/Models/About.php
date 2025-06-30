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
        'mission',
        'vission',
        'ceo_image',
        'ceo_name',
        'ceo_designation',
        'ceo_word',
        'director_image',
        'director_name',
        'director_designation' ,
        'director_word',
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
            'vission'               =>$request->vission,
            'mission'               => $request->mission,
            'ceo_name'              => $request->ceo_name,
            'ceo_designation'       => $request->ceo_designation,
            'ceo_image'             =>fileUpload($request->file('ceo_image'), 'about', isset($id) ? static::find($id)->ceo_image : ''),
            'ceo_word'              => $request->ceo_word,
            'director_name'         => $request->director_name,
            'director_designation'  => $request->director_designation,
            'director_image'        =>fileUpload($request->file('director_image'), 'about', isset($id) ? static::find($id)->director_image : ''),
            'director_word'         => $request->director_word,
            'status'                => $request->status == 'on' ? 1 : 0,
        ]);
}
}
