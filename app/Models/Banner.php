<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        
        'banner_image',
        'banner_title',
        'banner_description',
        'status'
        
    ];

     public static function saveOrUpdateBanner($request, $id = null)
    {     $titles =  explode(',', $request->banner_title[0]);
          $descriptions =  explode(',', $request->banner_description[0]);


          $imagePaths = [];

    if ($request->hasFile('banner_image')) {
        foreach ($request->file('banner_image') as $file) {
            $fileName = rand(10, 999999999) . time() . '.' . $file->getClientOriginalExtension();
            $fileDirectory = 'admin/uploaded-files/banner/';
            $file->move(public_path($fileDirectory), $fileName);
            $imagePaths[] = $fileDirectory . $fileName;
        }
    }

       Banner::updateOrCreate(['id' => $id], [
            
            'banner_image'        => json_encode($imagePaths),
            'banner_title'        => implode(',', $titles),
            'banner_description'  => implode(',' ,$descriptions),
            'status'              => $request->status == 'on' ? 1 : 0,
        ]);
}

}
