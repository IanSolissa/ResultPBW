<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('FrontEnd.HomePage.layouts.MainContactus');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $Comment=Comment::all();
        return view('BackEnd.Dashboard.layouts.DashboardContactus',[
            'Comment'=>$Comment,
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules=[
            'fullname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'subject'=>'required',
            'message'=>'required',
        
        ];
        $validation=$request->validate($rules);
        Comment::create($validation);
        return redirect('/homepage');
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Comment::destroy($id);
        return redirect('dashboard/contactus/create');
    }
}
