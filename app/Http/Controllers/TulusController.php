<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Tiket;
use Illuminate\Http\Request;

class TulusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tulus=Berita::where('id_artis',2)->get();
        $Tiket=Tiket::where('prerelease',True)->get();
        return view('FrontEnd.HomePage.layouts.MainHomePageTulus',
        [
            'tulus'=>$tulus,
            'Tiket'=>$Tiket
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
