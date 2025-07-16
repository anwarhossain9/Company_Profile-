<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class IndustrialAttachmentCategory extends Model
{
    use HasFactory;
     use SoftDeletes;
    protected $fillable = [
        'industrial_attachment_category_name',
        'status'
    ];

    public static function saveOrUpdateIndustrialAttachmentCategory($request, $id = null)
    {
        IndustrialAttachmentCategory::updateOrCreate(['id' => $id], [
            'industrial_attachment_category_name' => $request->industrial_attachment_category_name,
            'status'                               => $request->status == 'on' ? 1 : 0,
        ]);
}

public function industrialAttachments()
    {
        return $this->hasMany(IndustrialAttachment::class);
    }

}
