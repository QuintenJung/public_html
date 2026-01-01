<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\resetTokens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\Email;

class ResetTokensController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = resetTokens::all();
        return view('resetTokens.allTokens', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
      
        return view('resetTokens.emailInput');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $token = random_int(0, 9999) * random_int(0, 9999);
        $email = $request->input('email');
        $allTokensForId = user::where('email', $email)->get();
        $userId = $allTokensForId[0]['id'];
        $name = $allTokensForId[0]['name'];
        $token = resetTokens::create([
            'name' => $name,
            'token' => $token,
            'userId' => $userId
        ]);
        return "<a href='/user/" . $token['id'] . "/" . $token['token'] . "/resetPassword'>/user/" . $token['id'] . "/" . $token['token'] . "/resetPassword</a>";
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $tokenData = resetTokens::find($id);
        return view('resetTokens.inputToken', ['data'=> $tokenData]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(resetTokens $resetTokens)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, resetTokens $resetTokens)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(resetTokens $resetTokens)
    {
        //
    }
}
