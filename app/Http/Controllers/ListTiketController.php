<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ListTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Transaksi=Transaksi::all();
       return view('BackEnd.Dashboard.ListTiket',[
        'Transaksi'=>$Transaksi,
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
    public function store(Request $request){
        // dd($request->id);
        $rules=[
            'pembayaran'=>'required',
            'id'=>'required'
        ];
        $validation=$request->validate($rules);
        // dd($validation['id']);
        DB::table('transaksis')->where('id',$validation['id'])->update([
            'pembayaran'=>True ,
        ]);
        return redirect('dashboard/list-tiket');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaksi $transaksi)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
      
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
        Transaksi::destroy($id);
        return redirect('/dashboard/list-tiket')->with('succes','Post has been deleted');

    }
}
