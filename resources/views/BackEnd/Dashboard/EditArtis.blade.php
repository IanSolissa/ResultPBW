@extends('BackEnd.Dashboard.layouts.CreateDashboard')

@section('container-create')
    {{-- @foreach ($Artis as $Artis)
@endforeach --}}
    @foreach ($Artis as $artis)
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Manage Artis</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="btn-group me-2">
                </div>
            </div>
        </div>


        <div class="col-lg-8">

            <form method="POST" action="/dashboard/manageartis/{{ $artis->id }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                {{-- Nama Project --}}
                <div class="mb-3">
                    <label for="nama_artis" class="form-label">Nama Artis</label>
                    <input value="{{ old('nama_artis', $artis->nama_artis) }}"; type="text" class="form-control";
                        id="nama_artis" ; aria-describedby="emailHelp"; name="nama_artis" ; autofocus;>

                    @error('nama_artis')
                        <div class="pesaneror">
                            {{ $message }}
                        </div>
                    @enderror
                    <button type="submit" class="btn btn-primary" style="margin-top:3%;">Manage Artis</button>
    @endforeach
    </form>

    </div>
    {{-- matikan script gambar --}}
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
