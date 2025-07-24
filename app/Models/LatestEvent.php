<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class LatestEvent extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'latest_event',
        'status'
        
    ];

     public static function saveOrUpdateLatestEvent($request, $id = null)
    {
        LatestEvent::updateOrCreate(['id' => $id], [
            'latest_event'  => $request->latest_event,
            'status'        => $request->status == 'on' ? 1 : 0,
        ]);
}
}
