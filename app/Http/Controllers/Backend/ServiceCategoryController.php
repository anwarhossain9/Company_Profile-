<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ServiceCategory;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.service-category.manage',[
            'serviceCategories'=>ServiceCategory::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service-category.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         ServiceCategory::saveOrUpdateServiceCategory($request);
        return redirect()->route('service_categories.index')->with('success','Service Category Create Successfully');
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
        return view('backend.service-category.form',[
            'serviceCategory' => ServiceCategory::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         ServiceCategory::saveOrUpdateServiceCategory($request,$id);
        return redirect()->route('service_categories.index')->with('success','Service Category Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceCategory= ServiceCategory::where('id',$id)->first();
        if ($serviceCategory)
        {
            $serviceCategory->delete();
        }
        return redirect()->route('service_categories.index')->with('success','Service Category Delete Successfully');
    }
}
