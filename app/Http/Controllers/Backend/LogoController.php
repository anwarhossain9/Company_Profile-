<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logo;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.logo.manage',[
            'logos'=>Logo::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.logo.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        Logo::saveOrUpdatelogo($request);
        return redirect()->route('logos.index')->with('success','Logo Create Successfully');
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
        return view('backend.logo.form',[
            'logo' => Logo::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Logo::saveOrUpdatelogo($request,$id);
        return redirect()->route('logos.index')->with('success','Logo Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $logo= Logo::where('id',$id)->first();
        if ($logo)
        {
            if (file_exists($logo->logo_image1)){
                unlink($logo->logo_image1);
            }
            if (file_exists($logo->logo_image2)){
                unlink($logo->logo_image2);
            }
            $logo->delete();
        }
        return redirect()->route('logos.index')->with('success','Logo Delete Successfully');
    }
}
