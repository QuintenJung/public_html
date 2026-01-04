<?php

namespace App\Http\Controllers;

use App\Models\rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = rol::all();
        return view('rol.allRols', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rol.inputMail');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'rol' => 'ascii|required',
            'email' => 'required|email|unique:rols,email'
        ]);
        $rol = rol::create([
            'rol' => $validated['rol'],
            'email' => $validated['email']
        ]);
        return redirect()->route("rol.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(rol $rol)
    {
        $rolInfo = rol::find($rol);
        // echo $rolInfo;
        return view("rol.rolInfo", ["rolInfo" => $rolInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(rol $rol)
    {
        $rolInfo = rol::find($rol);
        // return "test";
        return view("rol.editRol", ["rolInfo" => $rolInfo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, rol $rol)
    {
         $validated = $request->validate([
            'rol' => 'ascii|required'
        ]);
        $rolInfo = rol::find($rol)[0];
        $rol = $rolInfo->update([
            'rol' => $validated['rol'],
        ]);
        return redirect()->route("rol.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(rol $rol)
    {
        $rolInfo = rol::find($rol)[0];
        $rolInfo->delete();
        return redirect()->route('rol.index');
    }
}
