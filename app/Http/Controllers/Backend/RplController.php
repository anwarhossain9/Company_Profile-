<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rpl;

class RplController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         return view('backend.rpl.manage',[
            'rpls'=>rpl::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.rpl.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Rpl::saveOrUpdateRpl($request);
        return redirect()->route('rpls.index')->with('success','Rpl Create Successfully');
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
        return view('backend.rpl.form',[
            'rpl' => Rpl::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Rpl::saveOrUpdateRpl($request,$id);
        return redirect()->route('rpls.index')->with('success','Rpl Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $rpl = Rpl::where('id',$id)->first();
        if ($rpl)
        {
            if (file_exists($rpl->rpl_image)){
                unlink($rpl->rpl_image);
            }

             if (file_exists($rpl->instructor_image)){
                unlink($rpl->instructor_image);
            }
            $rpl->delete();
        }
        return redirect()->route('rpls.index')->with('success','Rpl Delete Successfully');
    }
}
