<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Achievement;

class AchievementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.achievement.manage',[
            'achievements'=>Achievement::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.achievement.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         Achievement::saveOrUpdateAchievement($request);
        return redirect()->route('achievements.index')->with('success','Achievement Create Successfully');
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
        return view('backend.achievement.form',[
            'achievement' => Achievement::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Achievement::saveOrUpdateAchievement($request,$id);
        return redirect()->route('achievements.index')->with('success','achievement Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $achievement = Achievement::where('id',$id)->first();
        if ($achievement)
        {
            if (file_exists($achievement->achievement_image)){
                unlink($achievement->achievement_image);
            }

             
            $achievement->delete();
        }
        return redirect()->route('achievements.index')->with('success','achievement Delete Successfully');
    }
}
