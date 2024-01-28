@extends('BackEnd.Dashboard.layouts.CreateDashboard')

@section('container-create')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Create Artis</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
     </div>
        </div>
    </div>

@foreach($Artis as $artis)
@endforeach

    <div class="col-lg-8">

        <form method="POST" action="/dashboard/manageartis" enctype="multipart/form-data">
            @csrf
            {{-- Nama Project --}}
            <div class="mb-3">
                <label for="nama_artis" class="form-label">Nama artis</label>
                <input value="{{ old('nama_artis',$artis->nama_artis) }}"; type="text" class="form-control"; id="nama_artis" ;
                aria-describedby="emailHelp"; name="nama_artis" ; autofocus;>
                @error('nama_artis')
                <div class="pesaneror">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary" style="margin-top:3%;">New Actor</button>
        </form>
    </div>
   
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
