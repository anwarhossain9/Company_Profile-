<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'asset_category_name',
        'status'
    ];

    public static function saveOrUpdateAssetCategory($request, $id = null)
    {
        AssetCategory::updateOrCreate(['id' => $id], [
            'asset_category_name' => $request->asset_category_name,
            'status'               => $request->status == 'on' ? 1 : 0,
        ]);
}

public function assets()
    {
        return $this->hasMany(Asset::class);
    }

}
