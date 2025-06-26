<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;

class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.course-category.manage',[
            'courseCategories'=>CourseCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.course-category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        CourseCategory::saveOrUpdateCourseCategory($request);
        return redirect()->route('course_categories.index')->with('success','Course Category Create Successfully');
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
         return view('backend.course-category.form',[
            'courseCategory' => CourseCategory::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        CourseCategory::saveOrUpdateCourseCategory($request,$id);
        return redirect()->route('course_categories.index')->with('success','Course Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $courseCategory= CourseCategory::where('id',$id)->first();
        if ($courseCategory)
        {
            $courseCategory->delete();
        }
        return redirect()->route('course_categories.index')->with('success','Course Category Delete Successfully');
    }
}
