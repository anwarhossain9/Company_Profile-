<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Statistic;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.statistic.manage',[
            'statistics'=>Statistic::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.statistic.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Statistic::saveOrUpdatestatistic($request);
        return redirect()->route('statistics.index')->with('success','Statistic Create Successfully');
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
        return view('backend.statistic.form',[
            'statistic' => Statistic::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Statistic::saveOrUpdateStatistic($request,$id);
        return redirect()->route('statistics.index')->with('success','Statistic Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $statistic = Statistic::where('id',$id)->first();
        if ($statistic)
        {
            $statistic->delete();
        }
        return redirect()->route('statistics.index')->with('success','Statistic Delete Successfully');
    }
}
