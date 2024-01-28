<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Tiket;
use Illuminate\Http\Request;

class NewTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $Tiket=Tiket::all();
       $Berita=Berita::all();
       return view('BackEnd.Dashboard.CreateTiket',[
        'Tiket'=>$Tiket,
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
        
        $rules=[
            'nama_tiket'=>'required||max:200',
            'harga_tiket'=>'integer||required',
            'category'=>'required',
            'gambar'=>'image|mimes:jpg,png,jpeg|file|max:2024',
            'quantity'=>'integer||max:10||required',
            'tanggal_konser'=>'required',
            'lokasi_tiket'=>'required',
            'prerelease'=>'boolean||required',
            'id_berita'=>'integer||required',
        ];
        
        $validation=$request->validate($rules);
        if ($request->file('gambar')) {
            // link ke public dari storage
            $validation['gambar'] = $request->file('gambar')->store();

        $fotoupload=$request->file('gambar');
        $extension=$fotoupload->extension();
        $final=date('y-m-d-h-i-s') . '.' . $extension;
        $fotoupload->move(public_path('upload_foto'),$final);
        $validation['gambar']=$final;
        }
            Tiket::create($validation);
            return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $tiket)
    {
        //
    }
}
