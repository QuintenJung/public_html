<?php

namespace App\Http\Controllers;

use App\Mail\EditPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

use App\Mail\OrderShipped;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = user::all();
        return view('users.allUsers', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.makeAccount');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'ascii|required',
            'email' => 'required|email|unique:users,email',
            'password' => 'ascii|required|confirmed'
        ]);
        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash::make($validated['password'])
        ]);
        Auth::login($user);
        $request->session()->regenerate();
        return redirect()->route("user.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(user $user)
    {
        $userInfo = user::find($user);
        return view("users.userInfo", ["userInfo" => $userInfo]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(user $user)
    {
        $userInfo = user::find($user);
        // return "test";
        return view("users.editUser", ["userInfo" => $userInfo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, user $user)
    {
        $validated = $request->validate([
            'name' => 'ascii|required'
        ]);
        $userInfo = user::find($user)[0];
        $user = $userInfo->update([
            'name' => $validated['name'],
        ]);
        $request->session()->regenerate();
        return redirect()->route("user.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(user $user)
    {
        $userInfo = user::find($user)[0];
        $userInfo->delete();
        return redirect()->route('logout');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Invalidate session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function showLoginForm()
    {
        return view('users.login');
    }

    public function login(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        $field = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'name';

        $credentials = [
            $field => $login,
            'password' => $password,
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'login' => 'De ingevoerde gegevens zijn onjuist.',
        ]);
    }

    public function passwordVergeten($id)
    {
        $userInfo = user::findOrFail($id);
        // return $userInfo;
        Mail::to($userInfo)->send(new EditPassword());
        // return "shit";
        return redirect()->route('controlRoom');
    }
}
