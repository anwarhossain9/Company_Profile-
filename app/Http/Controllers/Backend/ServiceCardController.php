<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceCard;

class ServiceCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.service-card.manage',[
            'services'    =>Service::all(),
            'serviceCards'=>ServiceCard::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.service-card.form',[
            'services' =>Service::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        ServiceCard::saveOrUpdateServiceCard($request);
        return redirect()->route('service_cards.index')->with('success','Service Card Create Successfully');
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
            'service'               =>Service::all(),
            'serviceCard'           => ServiceCard::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         ServiceCard::saveOrUpdateServiceCard($request,$id);
        return redirect()->route('service_cards.index')->with('success','Service Card Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $serviceCard = ServiceCard::where('id',$id)->first();
        if ($serviceCard)
        {
            if (file_exists($serviceCard->service_image)){
                unlink($serviceCard->service_image);
            }

            $serviceCard->delete();
        }
        return redirect()->route('service_cards.index')->with('success','Service Card Delete Successfully');
    }
}
