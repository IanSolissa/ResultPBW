@extends('FrontEnd.HomePage.layouts.MainDefaultNews')
@section('Defaultnews')
    <section>
        <div class="defaultcontainer">
            <div class="defaultgambar" align=center height='100vh'>
                <img src="/upload_foto_beritadefault/{{ $Berita->gambar }}" alt="Gambar Berita" width="80%">
            </div>
        </div>
    </section>
    <section>

        {{--  <div class="defaultcontainer">  --}}
        <div class="defaultjudul">

            <h1>{{ $Berita->judul_berita }}</h1>
        </div>
        {{--  </div>  --}}
    </section>
    <section>

        {{--  <div class="defaultcontainer">  --}}
        <div class="defaultisi">
            {!! $Berita->isi_berita !!}
        </div>
        {{--  </div>  --}}
    </section>
@endsection
