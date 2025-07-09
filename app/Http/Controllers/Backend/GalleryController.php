<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\GalleryCategory;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.gallery.manage',[
            'galleryCategories' =>GalleryCategory::all(),
            'galleries'=>Gallery::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gallery.form',[
            'galleryCategories' =>GalleryCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Gallery::saveOrUpdategallery($request);
        return redirect()->route('galleries.index')->with('success','Gallery Create Successfully');
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
        return view('backend.gallery.form',[
            'galleryCategories' =>GalleryCategory::all(),
            'gallery'           => Gallery::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Gallery::saveOrUpdategallery($request,$id);
        return redirect()->route('galleries.index')->with('success','Gallery Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $gallery = Gallery::where('id',$id)->first();
        if ($gallery)
        {
            if (file_exists($gallery->gallery_image)){
                unlink($gallery->gallery_image);
            }
            $gallery->delete();
        }
        return redirect()->route('galleries.index')->with('success','Gallery Delete Successfully');
    }
}
