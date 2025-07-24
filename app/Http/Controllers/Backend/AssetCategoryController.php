<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AssetCategory;

class AssetCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.asset-category.manage',[
            'assetCategories'=>AssetCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.asset-category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         AssetCategory::saveOrUpdateAssetCategory($request);
        return redirect()->route('asset_categories.index')->with('success','Asset Category Create Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('backend.asset-category.form',[
            'assetCategory' => AssetCategory::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         AssetCategory::saveOrUpdateAssetCategory($request,$id);
        return redirect()->route('asset_categories.index')->with('success','Asset Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $assetCategory= AssetCategory::where('id',$id)->first();
        if ($assetCategory)
        {    if (file_exists($assetCategory->asset_category_image)){
                unlink($assetCategory->asset_category_image);
            }
            $assetCategory->delete();
        }
        return redirect()->route('asset_categories.index')->with('success','Asset Category Delete Successfully');
    }
}
