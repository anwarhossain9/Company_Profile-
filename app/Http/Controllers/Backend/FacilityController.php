<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Facility;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.facility.manage',[
            'facilities'=>Facility::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.facility.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Facility::saveOrUpdateFacility($request);
        return redirect()->route('facilities.index')->with('success','Facility Create Successfully');
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
        return view('backend.facility.form',[
            'facility'     => Facility::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Facility::saveOrUpdateFacility($request,$id);
        return redirect()->route('facilities.index')->with('success','Facility Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $facility = Facility::where('id',$id)->first();
        if ($facility)
        {
            if (file_exists($facility->facility_image)){
                unlink($facility->facility_image);
            }

            $facility->delete();
        }
        return redirect()->route('facilities.index')->with('success','Facility Delete Successfully');
    }
}
