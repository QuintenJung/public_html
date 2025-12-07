<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\bugs;
use Illuminate\Http\Request;

class BugsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = bugs::all();
        return view('bugs.allBugs', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $userInfo = user::find(Auth::user()?->id);
        if ($userInfo == ""){
            $userInfo = "lockedOut";
        };
        return view('bugs.bugReport', ['userInfo' => $userInfo]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $validated = $request->validate([
            'title' => 'ascii|required',
            'content' => 'required',
            'userInfo' => 'required'
        ]);
         $user = Bugs::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'userInfo' => $validated['userInfo']
        ]);
        return redirect()->route("bug.index");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $bugData = bugs::find($id);
        return view('bugs.ticket', ['data'=> $bugData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(bugs $bugs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, bugs $bugs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $bugData = bugs::find($id);
        $bugData->delete();
        return redirect()->route('bug.index');
    }
}
