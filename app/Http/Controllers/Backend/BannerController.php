<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.banner.manage',[
            'banners'=>Banner::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.banner.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Banner::saveOrUpdateBanner($request);
        return redirect()->route('banners.index')->with('success','Banner Create Successfully');
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
        return view('backend.banner.form',[
            'banner' => Banner::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Banner::saveOrUpdateBanner($request,$id);
        return redirect()->route('banners.index')->with('success','Banner Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $banner = banner::where('id',$id)->first();
        if ($banner)
        {
            if (file_exists($banner->banner_image)){
                unlink($banner->banner_image);
            }
            $banner->delete();
        }
        return redirect()->route('banners.index')->with('success','banner Delete Successfully');
    }
}
