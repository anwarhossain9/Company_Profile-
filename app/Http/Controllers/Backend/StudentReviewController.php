<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentReview;

class StudentReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.student-review.manage',[
            'studentReviews'=>StudentReview::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.student-review.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        StudentReview::saveOrUpdateStudentReview($request);
        return redirect()->route('student_reviews.index')->with('success','Student Review Create Successfully');
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
        return view('backend.student-review.form',[
            'studentReview' => StudentReview::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        StudentReview::saveOrUpdateStudentReview($request,$id);
        return redirect()->route('student_reviews.index')->with('success','Student Review Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $studentReview = StudentReview::where('id',$id)->first();
        if ($studentReview)
        {
            if (file_exists($studentReview->image)){
                unlink($studentReview->image);
            }
            $studentReview->delete();
        }
        return redirect()->route('student_reviews.index')->with('success','Student Review Delete Successfully');
    }
}
