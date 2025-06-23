<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory;
     use SoftDeletes;

    protected $fillable = [
        
        'office_address',
        'phone_no',
        'contact_person_name',
        'contact_person_designation',
        'contact_time',
        'email_link',
        'facebook_link',
        'instagram_link',
        'linkedin_link',
        'youtube_link',
        'twitter_link',
        'google_map_link'
        
    ];

     public static function saveOrUpdateContact($request, $id = null)
    {
       Contact::updateOrCreate(['id' => $id], [
            'office_address'             => $request->office_address,
            'phone_no'                   => $request->phone_no,
            'contact_person_name'        => $request->contact_person_name,
            'contact_person_designation' => $request->contact_person_designation,
            'contact_time'               => $request->contact_time,
            'email_link'                 => $request->email_link,
            'facebook_link'              => $request->facebook_link,
            'instagram_link'             => $request->instagram_link,
            'linkedin_link'              => $request->linkedin_link,
            'youtube_link'               => $request->youtube_link,
            'twitter_link'               => $request->twitter_link,
            'google_map_link'            => $request->google_map_link,
            'status'                     => $request->status == 'on' ? 1 : 0,
        ]);
}
}
