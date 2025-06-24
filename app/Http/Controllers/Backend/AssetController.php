<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.asset.manage',[
            'assets'=>Asset::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.asset.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Asset::saveOrUpdateasset($request);
        return redirect()->route('assets.index')->with('success','Asset Create Successfully');
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
        return view('backend.asset.form',[
            'asset' => Asset::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Asset::saveOrUpdateasset($request,$id);
        return redirect()->route('assets.index')->with('success','Asset Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $asset = Asset::where('id',$id)->first();
        if ($asset)
        {
            if (file_exists($asset->asset_image)){
                unlink($asset->asset_image);
            }
            $asset->delete();
        }
        return redirect()->route('assets.index')->with('success','Asset Delete Successfully');
    }
}
