<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.teammember.manage',[
            'teammembers'=>TeamMember::all()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('backend.teammember.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        teammember::saveOrUpdateTeamMember($request);
        return redirect()->route('teammembers.index')->with('success','Team Member Create Successfully');
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
        return view('backend.teammember.form',[
            'teammember' => TeamMember::where('id',$id)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
         TeamMember::saveOrUpdateTeamMember($request,$id);
        return redirect()->route('teammembers.index')->with('success','Team Member Update Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $teammember = TeamMember::where('id',$id)->first();
        if ($teammember)
        {
            if (file_exists($teammember->teammember_image)){
                unlink($teammember->teammember_image);
            }
            $teammember->delete();
        }
        return redirect()->route('teammembers.index')->with('success','Team Member Delete Successfully');
    
    }
}
