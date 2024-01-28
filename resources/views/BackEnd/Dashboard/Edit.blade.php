@extends('BackEnd.Dashboard.layouts.CreateDashboard')

@section('container-create')
    {{-- @foreach ($Berita as $berita)
@endforeach --}}
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit News</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
            <div class="btn-group me-2">
            </div>
        </div>
    </div>



    <div class="col-lg-8">

        <form method="post" action="/dashboard/{{ $Berita->id }}" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- Nama Project --}}
            <div class="mb-3">
                <label for="judul_berita" class="form-label">Judul Berita</label>
                <input value="{{ old('judul_berita', $Berita->judul_berita) }}"; type="text" class="form-control";
                    id="judul_berita" ; aria-describedby="emailHelp"; name="judul_berita" ; autofocus;>

                @error('judul_berita')
                    <div class="pesaneror">
                        {{ $message }}
                    </div>
                @enderror
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar Berita</label>
                    <input value="{{ old('gambar', $Berita->gambar) }}"; type="file" class="form-control"; id="gambar"
                        ; aria-describedby="emailHelp"; name="gambar" ;>
                    @error('gambar')
                        <div class="pesaneror">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="mb-3">
                <label for="id_artis" class="form-label">
                    Nama Artis
                </label>
                @foreach ($Artis as $artis)
                @endforeach
                <select name="id_artis"class="form-select">
                    @for ($i = 0; $i < $Artis->count(); $i++)
                        <option value={{ $i + 1 }}>{{ $Artis[$i]->nama_artis }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label for="spotlight" class="form-label">
                    Spotlight
                </label>
                <select name="spotlight"class="form-select">
                    <option value=0>No</option>
                    <option value=1>Yes</option>
                </select>
            </div>

            {{-- description Artis --}}
            <div class="mb-3">
                <label for="isi_berita" class="form-label">Isi Berita</label>



                <input value="{{ old('isi_berita', $Berita->isi_berita) }}"id="isi_berita" type="hidden" name="isi_berita">

                <trix-editor input="isi_berita">

                </trix-editor>
                @error('isi_berita')
                    <div class="pesaneror">
                        <p class="text-danger">
                            {{ $message }}
                        </p>
                    </div>
                @enderror
            </div>
            {{-- ceklis --}}
            {{-- <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div> --}}
            {{-- <input type="text" name={{ $id_user->id }} id={{ $id_user->id }} value="{{ $id_user->id }}" style="display:none;";  @disabled(true)> --}}
            <button type="submit" class="btn btn-primary" style="margin-top:3%;">Edit Project</button>
        </form>
    </div>
    {{-- matikan script gambar --}}
    <script>
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>
@endsection
