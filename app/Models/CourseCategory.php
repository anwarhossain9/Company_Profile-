<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseCategory extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $fillable = [
        'name',
        'status'
    ];

    public static function saveOrUpdateCourseCategory($request, $id = null)
    {
        CourseCategory::updateOrCreate(['id' => $id], [
            'name'             => $request->name,
            'status'           => $request->status == 'on' ? 1 : 0,
        ]);
}

public function courses()
    {
        return $this->hasMany(Course::class);
    }

}
