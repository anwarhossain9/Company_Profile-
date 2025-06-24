<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.about.manage',[
            'abouts'=>About::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.about.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        About::saveOrUpdateAbout($request);
        return redirect()->route('abouts.index')->with('success','About Create Successfully');
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
        return view('backend.about.form',[
            'about' => About::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        About::saveOrUpdateAbout($request,$id);
        return redirect()->route('abouts.index')->with('success','About Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about = About::where('id',$id)->first();
        if ($about)
        {
            if (file_exists($about->image_related_company)){
                unlink($about->image_related_company);
            }

            if (file_exists($about->story_related_image)){
                unlink($about->story_related_image);
            }


            $about->delete();
            
        }
        return redirect()->route('abouts.index')->with('success','About Delete Successfully');
    }
}
