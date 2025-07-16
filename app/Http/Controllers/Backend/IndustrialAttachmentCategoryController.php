<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndustrialAttachmentCategory;

class IndustrialAttachmentCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.industrial-attachment-category.manage',[
            'industrialAttachmentCategories'=>IndustrialAttachmentCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.industrial-attachment-category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        IndustrialAttachmentCategory::saveOrUpdateIndustrialAttachmentCategory($request);
        return redirect()->route('industrial_attachment_categories.index')->with('success','Industrial Attachment Category Create Successfully');
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
         return view('backend.industrial-attachment-category.form',[
            'industrialAttachmentCategory' => IndustrialAttachmentCategory::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         IndustrialAttachmentCategory::saveOrUpdateIndustrialAttachmentCategory($request,$id);
        return redirect()->route('industrial_attachment_categories.index')->with('success','Industrial Attachment Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $industrialAttachmentCategory= IndustrialAttachmentCategory::where('id',$id)->first();
        if ($industrialAttachmentCategory)
        {
            $industrialAttachmentCategory->delete();
        }
        return redirect()->route('industrial_attachment_categories.index')->with('success','Industrial Attachment Category Delete Successfully');
    }
}
