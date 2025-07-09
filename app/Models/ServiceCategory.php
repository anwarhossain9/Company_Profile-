<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ServiceCategory extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'service_category_name',
        'status'
    ];

    public static function saveOrUpdateServiceCategory($request, $id = null)
    {
        ServiceCategory::updateOrCreate(['id' => $id], [
            'service_category_name' => $request->service_category_name,
            'status'                => $request->status == 'on' ? 1 : 0,
        ]);
}

public function services()
    {
        return $this->hasMany(Service::class);
    }

}
