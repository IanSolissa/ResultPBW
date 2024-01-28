<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use App\Models\Berita;
use App\Models\Tiket;
use Illuminate\Http\Request;

class JustinBieberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $Tiket=Tiket::all();
      $Berita=Berita::all();
        return view('FrontEnd.HomePage.layouts.MainHomePageJB',[
            'JB'=>$Berita,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        dd('masuk create');


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }
}
