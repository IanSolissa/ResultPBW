<?php

namespace App\Http\Controllers;

use App\Models\Artis;
use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use \Illuminate\Support\Str;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('BackEnd.Dashboard.MainDashboard', [
            'Berita' => Berita::all(),
            'Artis' => Artis::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validation = $request->validate([
            'judul_berita' => 'required||max:100',
            'id_artis' => 'required',
            'isi_berita' => 'required',
            'nama_konser' => 'required',
            'spotlight' => 'boolean||required',
            'gambar' => 'image|mimes:jpg,png,jpeg|file|max:2024',
        ]);
        // dd($request['spotlight']);
        if ($request->file('gambar') && $validation['id_artis'] == 1) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_pinkfloyd'), $final);
            $validation['gambar'] = $final;
        } else if ($request->file('gambar') && $validation['id_artis'] == 2) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_tulus'), $final);
            $validation['gambar'] = $final;
        } else if ($request->file('gambar') && $validation['id_artis'] == 3) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_justinbieber'), $final);
            $validation['gambar'] = $final;
        } else if ($request->file('gambar') && $validation['id_artis'] == 4) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_coldplay'), $final);
            $validation['gambar'] = $final;
        } else if ($request->file('gambar')) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_beritadefault'), $final);
            $validation['gambar'] = $final;
        }
        $validation['excerpts'] = str::limit($request->isi_berita, 100);
        $validation['excerpts'] = strip_tags($validation['excerpts']);
        Berita::create($validation);
        return redirect('/dashboard');
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

        return view('BackEnd.Dashboard.Edit', [
            'Berita' => Berita::find($id),
            'Artis' => Artis::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rules = [
            'judul_berita' => 'required|max:200|unique:beritas',
            'id_artis' => 'required',
            'isi_berita' => 'required',
            'spotlight' => 'required',
            'gambar' => 'image|mimes:jpg,png,jpeg|file|max:2024',
        ];

        if ($request['judul_berita'] == $request['judul_berita']); {
            $rules['judul_berita'] = 'required||max:100';
        }
        $validation = $request->validate($rules);
        if ($request->file('gambar') && $validation['id_artis'] == 1) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_pinkfloyd'), $final);
            $validation['gambar'] = $final;
        } else if ($request->file('gambar') && $validation['id_artis'] == 2) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_tulus'), $final);
            $validation['gambar'] = $final;
        } else if ($request->file('gambar') && $validation['id_artis'] == 3) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_justinbieber'), $final);
            $validation['gambar'] = $final;
        } else if ($request->file('gambar') && $validation['id_artis'] == 4) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_coldplay'), $final);
            $validation['gambar'] = $final;
        }
        else if ($request->file('gambar')) {
            $fotoupload = $request->file('gambar');
            $extension = $fotoupload->extension();
            $final = date('y-m-d-h-i-s') . '.' . $extension;
            $fotoupload->move(public_path('upload_foto_beritadefault'), $final);
            $validation['gambar'] = $final;
        }
        $validation['excerpts'] = str::limit($request->isi_berita, 100);
        $validation['excerpts'] = strip_tags($validation['excerpts']);
        Berita::where('id', $id)->update($validation);

        return redirect('/dashboard')->with('succes', "Post has been updated");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Berita::destroy($id);
        return redirect('/dashboard')->with('succes', 'Post has been deleted');
    }
}
