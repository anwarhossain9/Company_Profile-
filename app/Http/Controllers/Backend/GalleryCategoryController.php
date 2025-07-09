<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;

class GalleryCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('backend.gallery-category.manage',[
            'galleryCategories'=>GalleryCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.gallery-category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        GalleryCategory::saveOrUpdategalleryCategory($request);
        return redirect()->route('gallery_categories.index')->with('success','Gallery Category Create Successfully');
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
        return view('backend.gallery-category.form',[
            'galleryCategory' => GalleryCategory::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         GalleryCategory::saveOrUpdategalleryCategory($request,$id);
        return redirect()->route('gallery_categories.index')->with('success','Gallery Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galleryCategory= GalleryCategory::where('id',$id)->first();
        if ($galleryCategory)
        {    if (file_exists($galleryCategory->gallery_category_image)){
                unlink($galleryCategory->gallery_category_image);
            }
            $galleryCategory->delete();
        }
        return redirect()->route('gallery_categories.index')->with('success','Gallery Category Delete Successfully');
    }
}
