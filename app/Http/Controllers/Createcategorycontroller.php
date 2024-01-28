<?php

namespace App\Http\Controllers;

use App\Models\Tiket;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Createcategorycontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($Harga)
    {   
        $Harga=Tiket::where('nama_tiket',$Harga)->get();
        // $Quantity=Tiket::where('nama_tiket',$Harga)->get('quantity');
        // dd($Quantity);
        
        $tiket=Tiket::all();
       return view('BackEnd.Dashboard.Createcategory',[
        'Tiket'=>$tiket,
        'Harga'=>$Harga,
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
     
        $request['id_user']=Auth()->user()->id;
        // $request['pembayaran']='NULL';
        // dd($request['id_tiket']);
        $rules=[
            'id_user'=>'required',
            'id_tiket'=>'required',
            'total_pembayaran'=>'required',
        ];
        $validation=$request->validate($rules);
        Transaksi::create($validation);
        return redirect("/category/checkout");
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
