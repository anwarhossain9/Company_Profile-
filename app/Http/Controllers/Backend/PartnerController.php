<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Partner;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.partner.manage',[
            'partners'=>Partner::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.partner.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Partner::saveOrUpdatePartner($request);
        return redirect()->route('partners.index')->with('success','Partner Create Successfully');
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
        return view('backend.partner.form',[
            'partner' => Partner::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Partner::saveOrUpdatePartner($request,$id);
        return redirect()->route('partners.index')->with('success','Partner Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $partner= partner::where('id',$id)->first();
        if ($partner)
        {
            if (file_exists($partner->partner_image)){
                unlink($partner->partner_image);
            }
            $partner->delete();
        }
        return redirect()->route('partners.index')->with('success','partnerDelete Successfully');
   
    }
}
