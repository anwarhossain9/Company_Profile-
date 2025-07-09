<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryCategory extends Model
{
    use HasFactory;

     use SoftDeletes;
    protected $fillable = [
        'gallery_category_name',
        'gallery_category_image',
        'status'
    ];

    public static function saveOrUpdateGalleryCategory($request, $id = null)
    {
        GalleryCategory::updateOrCreate(['id' => $id], [
            'gallery_category_name'  => $request->gallery_category_name,
            'gallery_category_image' =>fileUpload($request->file('gallery_category_image'), 'gallery', isset($id) ? static::find($id)->gallery_category_image : ''),
            'status'                 => $request->status == 'on' ? 1 : 0,
        ]);
}

public function galleries()
    {
        return $this->hasMany(Gallery::class);
    }

}

