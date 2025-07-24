<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LatestEvent;

class LatestEventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.latest-event.manage',[
            'latestEvents'=>LatestEvent::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.latest-event.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         LatestEvent::saveOrUpdateLatestEvent($request);
        return redirect()->route('latest_events.index')->with('success','Latest Event Create Successfully');
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
        return view('backend.latest-event.form',[
            'latestEvent' => LatestEvent::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        LatestEvent::saveOrUpdateLatestEvent($request,$id);
        return redirect()->route('latest_events.index')->with('success','Latest Event Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $latestEvent= LatestEvent::where('id',$id)->first();
        if ($latestEvent)
        {
            $latestEvent->delete();
        }
        return redirect()->route('latest_events.index')->with('success','Latest Event Delete Successfully');
    }
}
