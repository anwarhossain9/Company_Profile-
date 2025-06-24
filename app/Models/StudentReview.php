<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StudentReview extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'image',
        'name',
        'review',
        'status'
        
    ];

     public static function saveOrUpdateStudentReview($request, $id = null)
    {
       StudentReview::updateOrCreate(['id' => $id], [
            
            'image'   =>fileUpload($request->file('image'), 'studentReview', isset($id) ? static::find($id)->image : ''),
            'name'    => $request->name,
            'review'  => $request->review,
            'status'  => $request->status == 'on' ? 1 : 0,
        ]);
}
}
