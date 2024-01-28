<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('FrontEnd.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $credentials=$request->validate([
        'email'=>'required|',
        'password'=>'required|max:10'
       ]);
       if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('/homepage');
       }
       return back()->with("failed","login tidak berhasil");
    }
    public function auth(Request $request)
   {


        $credentials = $request->validate([
           'email'=>'required|email:dns',
           'password'=>'required'
        ]);

        // Jika benar


        if(Auth::attempt($credentials)){
           $request->session()->regenerate();
           return redirect()->intended('/homepage');

        }
    return back()->with("failed","Login Tidak Berhasil!");
        // jika salah
        // with dengan pesan



   }


    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
