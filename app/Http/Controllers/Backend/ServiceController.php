<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCategory;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.services.manage',[
            'serviceCategories' =>ServiceCategory::all(),
            'services'=>Service::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.services.form',[
            'serviceCategories' =>ServiceCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Service::saveOrUpdateservice($request);
        return redirect()->route('services.index')->with('success','Service Create Successfully');
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
        return view('backend.services.form',[
            'serviceCategories' =>ServiceCategory::all(),
            'service'           => Service::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Service::saveOrUpdateservice($request,$id);
        return redirect()->route('services.index')->with('success','Service Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Service::where('id',$id)->first();
        if ($service)
        {
            if (file_exists($service->service_image)){
                unlink($service->service_image);
            }

             if (file_exists($service->image)){
                unlink($service->image);
            }
            $service->delete();
        }
        return redirect()->route('services.index')->with('success','Service Delete Successfully');
    }
}
