<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statistic extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'title',
        'count',
        'status'
        
    ];

     public static function saveOrUpdateStatistic($request, $id = null)
    {
       Statistic::updateOrCreate(['id' => $id], [
            
            'title'  => $request->title,
            'count'  => $request->count,
            'status' => $request->status == 'on' ? 1 : 0,
        ]);
}
}
