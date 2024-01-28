<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Tiket;
use Illuminate\Support\Facades\DB;

class LandingpagePinkFloydController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Berita=Berita::all();
        return view('FrontEnd.HomePage.layouts.MainHomePagePinkFloyd',[
            'Berita'=>$Berita,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
dd($id);
    $berita=Berita::find($id);

        return view('FrontEnd.HomePage.layouts.MainHomePagePinkFloyd');
    
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