@extends('BackEnd.Dashboard.layouts.CreateDashboard')

@section('container-create')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create Tiket</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
     </div>
        </div>
    </div>

@foreach($Tiket as $tiket)
@endforeach

    <div class="col-lg-8">

        <form method="post" action="/dashboard/create-tiket" enctype="multipart/form-data">
            @csrf
            {{-- Nama Project --}}
            <div class="mb-3">
                <label for="nama_tiket" class="form-label">Nama Tiket</label>
                <input value="{{ old('nama_tiket',$tiket->nama_tiket) }}"; type="text" class="form-control"; id="nama_tiket" ;
                aria-describedby="emailHelp"; name="nama_tiket" ; autofocus;>
                @error('nama_tiket')
                <div class="pesaneror">
                    {{ $message }}
                </div>
                @enderror
            </div>
                <div class="mb-3">
                    <label for="harga_tiket" class="form-label">harga_tiket Tiket</label>
                    <input value="{{ old('harga_tiket',$tiket->harga_tiket) }}"; type="number" class="form-control"; id="harga_tiket" ;
                        aria-describedby="emailHelp"; name="harga_tiket" ; >
                    @error('harga_tiket')
                        <div class="pesaneror">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">category Tiket</label>
                    <input value="{{ old('category',$tiket->category) }}"; type="text" class="form-control"; id="category" ;
                        aria-describedby="emailHelp"; name="category" ; >
    
                    @error('category')
                        <div class="pesaneror">
                            {{ $message }}
                        </div>
                    @enderror
    
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Tiket</label>
                    <input value="{{ old('gambar',$tiket->gambar) }}"; type="file" class="form-control"; id="gambar" ;
                        aria-describedby="emailHelp"; name="gambar" ; >
    
                    @error('gambar')
                        <div class="pesaneror">
                            {{ $message }}
                        </div>
                    @enderror
    
                </div>
                <div class="mb-3">
                    <label for="quantity" class="form-label">quantity Tiket</label>
                    <input value="{{ old('quantity',$tiket->quantity) }}"; type="number" class="form-control"; id="quantity" ;
                        aria-describedby="emailHelp"; name="quantity" ; >
    
                    @error('quantity')
                        <div class="pesaneror">
                            {{ $message }}
                        </div>
                    @enderror
    
                </div>

                <div class="mb-3">
                    <label for="tanggal_konser" class="form-label">tanggal_konser Tiket</label>
                    <input value="{{ old('tanggal_konser',$tiket->tanggal_konser) }}"; type="text" class="form-control"; id="tanggal_konser" ;
                        aria-describedby="emailHelp"; name="tanggal_konser" ; >
    
                    @error('tanggal_konser')
                        <div class="pesaneror">
                            {{ $message }}
                        </div>
                    @enderror
    
                </div>

                <div class="mb-3">
                    <label for="lokasi_tiket" class="form-label">Lokasi Tiket</label>
                    <input value="{{ old('lokasi_tiket',$tiket->lokasi_tiket) }}"; type="text" class="form-control"; id="lokasi_tiket" ;
                        aria-describedby="emailHelp"; name="lokasi_tiket" ; >
    
                    @error('lokasi_tiket')
                        <div class="pesaneror">
                            {{ $message }}
                        </div>
                    @enderror
    
                </div>

            <div class="mb-3">
                <label for="id_berita" class="form-label">
                   Nama berita
                </label>
                @foreach ($Berita as $berita)
                @endforeach
                <select name="id_berita"class="form-select">
                    @for ($i = 0; $i < $Berita->count(); $i++)
                        <option value={{ $i+1 }}>{{ $Berita[$i]->judul_berita}}</option>
                    @endfor
                </select>
            </div>
            

            <div class="mb-3">
                <label for="prerelease" class="form-label">
                    Pre-Release ?
                </label>
                <select name="prerelease"class="form-select">
                    <option value="0">No</option>
                    <option value="1">Yes</option>
                </select>
            </div>  
            <button type="submit" class="btn btn-primary" style="margin-top:3%;">Create Tiket</button>
        </form>
    </div>
   
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
