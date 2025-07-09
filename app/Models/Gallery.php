<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gallery extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'gallery_category_id',
        'gallery_title',
        'gallery_image',
        'description',
        'status'
    ];

    public static function saveOrUpdateGallery($request, $id = null)
    {
        Gallery::updateOrCreate(['id' => $id], [
            'gallery_category_id' => $request->gallery_category_id,
            'gallery_title'       => $request->gallery_title,
            'gallery_image'       =>fileUpload($request->file('gallery_image'), 'gallery', isset($id) ? static::find($id)->gallery_image : ''),
            'description'         => $request->description,
            'status'              => $request->status == 'on' ? 1 : 0,
        ]);
}



    public function galleryCategory()
    {
        return $this->belongsTo(GalleryCategory::class);
    }

}

