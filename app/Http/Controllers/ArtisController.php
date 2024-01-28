<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use App\Http\Requests\StoreArtisRequest;
use App\Http\Requests\UpdateArtisRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class ArtisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $Artis=Artis::all();
        return view('BackEnd.Dashboard.MainDashboardArtis',[
            'Artis'=>$Artis,
        ]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $Artis=Artis::all();
     return view('BackEnd.Dashboard.CreateArtis',[
        'Artis'=>$Artis,
     ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation=$request->validate([
            'nama_artis'=>'required',
        ]);
    Artis::create($validation);
    return redirect('/dashboard/manageartis');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artis $artis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $artis)
    {
        $artis=Artis::where('id',$artis)->get();
        return view('BackEnd.dashboard.EditArtis',[
            'Artis'=>$artis,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, String $artis)
    {   
        $Rules=['nama_artis'=>'required'];
        $validation=$request->validate($Rules);
        Artis::where('id',$artis)->update($validation);
        return redirect('dashboard/manageartis');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $artis)
    {
        $artis=Artis::where('id',$artis)->get();
        Artis::destroy($artis);
        return redirect('/dashboard/manageartis');
    }
}
