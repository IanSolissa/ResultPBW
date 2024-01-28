<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Artis;
class CreateDashboard extends Controller
{
    public function index(){
        // dd("asdsa");
        return view('BackEnd.Dashboard.Create',[
            'Berita'=>Berita::all(),
            'Artis'=>Artis::all(),
        ]);
    }
}
