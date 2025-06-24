<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TeamMember extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'teammember_image',
        'teammember_name',
        'teammember_designation',
        'status'
        
    ];

     public static function saveOrUpdateTeamMember($request, $id = null)
    {
       TeamMember::updateOrCreate(['id' => $id], [
            
            'teammember_image'       =>fileUpload($request->file('teammember_image'), 'teammember', isset($id) ? static::find($id)->teammember_image : ''),
            'teammember_name'        => $request->teammember_name,
            'teammember_designation' => $request->teammember_designation,
            'status'                 => $request->status == 'on' ? 1 : 0,
        ]);
}
}
