<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Category3Controller extends Controller
{
    public function index(Transaksi $transaksi){
        if(!auth()->check()||$transaksi->pembayaran==True){
        $result=Transaksi::where([
            ['id_user',auth()->user()->id],
            ['pembayaran',True],
            ['id',$transaksi->id],
            ])->get();   
        //    dd($result);
            return view("FrontEnd.Tiket.layouts.Category3",[
        'result'=>$result]
    );
            
        }
      
        // if(!auth()->check()||$request->id);
    }
}
