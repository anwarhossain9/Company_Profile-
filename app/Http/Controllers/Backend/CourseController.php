<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.courses.manage',[
            'courses'=>Course::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.courses.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Course::saveOrUpdateCourse($request);
        return redirect()->route('courses.index')->with('success','Course Create Successfully');
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
        return view('backend.courses.form',[
            'course' => Course::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Course::saveOrUpdateCourse($request,$id);
        return redirect()->route('courses.index')->with('success','Course Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $course = Course::where('id',$id)->first();
        if ($course)
        {
            if (file_exists($course->couse_image)){
                unlink($course->course_image);
            }
            $course->delete();
        }
        return redirect()->route('courses.index')->with('success','Course Delete Successfully');
    }
}
