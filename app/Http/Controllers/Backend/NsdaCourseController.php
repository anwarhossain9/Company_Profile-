<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\NsdaCourse;

class NsdaCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('backend.nsda-course.manage',[
            'nsdaCourses'=>NsdaCourse::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.nsda-course.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        NsdaCourse::saveOrUpdateNsdaCourse($request);
        return redirect()->route('nsda_courses.index')->with('success','Nsda Course Create Successfully');
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
        return view('backend.nsda-course.form',[
            'nsdaCourse' => NsdaCourse::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        NsdaCourse::saveOrUpdateNsdaCourse($request,$id);
        return redirect()->route('nsda_courses.index')->with('success','Nsda Course Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $nsdaCourse = NsdaCourse::where('id',$id)->first();
        if ($nsdaCourse)
        {
            if (file_exists($nsdaCourse->nsda_course_image)){
                unlink($nsdaCourse->nsda_course_image);
            }
            
            $nsdaCourse->delete();
        }
        return redirect()->route('nsda_courses.index')->with('success','Nsda Course Delete Successfully');
    }
}
