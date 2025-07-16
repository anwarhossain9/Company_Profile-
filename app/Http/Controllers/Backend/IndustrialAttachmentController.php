<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\IndustrialAttachment;
use App\Models\IndustrialAttachmentCategory;

class IndustrialAttachmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.industrial-attachments.manage',[
            'industrialAttachmentCategories' =>IndustrialAttachmentCategory::all(),
            'industrialAttachments'=>IndustrialAttachment::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.industrial-attachments.form',[
            'industrialAttachmentCategories' =>IndustrialAttachmentCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        IndustrialAttachment::saveOrUpdateIndustrialAttachment($request);
        return redirect()->route('industrial_attachments.index')->with('success','Industrial Attachment Create Successfully');
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
        return view('backend.industrial-attachments.form',[
            'industrialAttachmentCategories' =>IndustrialAttachmentCategory::all(),
            'industrialAttachment'           => IndustrialAttachment::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        IndustrialAttachment::saveOrUpdateIndustrialAttachment($request,$id);
        return redirect()->route('industrial_attachments.index')->with('success','Industrial Attachment Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $industrialAttachment = IndustrialAttachment::where('id',$id)->first();
        if ($industrialAttachment)
        {
            if (file_exists($industrialAttachment->industrial_attachment_image)){
                unlink($industrialAttachment->industrial_attachment_image);
            }

             if (file_exists($industrialAttachment->instructor_image)){
                unlink($industrialAttachment->instructor_image);
            }
            $industrialAttachment->delete();
        }
        return redirect()->route('industrial_attachments.index')->with('success','Industrial Attachment Delete Successfully');
    }
}
