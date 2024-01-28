{{-- ini jangan di hapus yak buat tamplate --}}

@extends('FrontEnd.HomePage.SuperHomePageCP')
@section('container-Justin')
    @foreach ($Berita as $berita)
        @if ($berita->artis->nama_artis == 'coldplay')
            <section>

                <div class="CP">
                    {{--  <img src="/images/CP/Header.jpg" alt="" width="100%">  --}}
                </div>
            </section>
            <section>
                <div class="content2 CP2">
                    <div>
                        {!! $berita->isi_berita !!}
                    </div>
                </div>
            </section>

            <section>
                <div class="content3 CP3">
                    <div class="before-lingkaran">
                        <div style="--i:1"></div>
                        <div style="--i:2"></div>
                        <div style="--i:3"></div>
                        <div style="--i:4"></div>
                        <div style="--i:5"></div>
                        <div style="--i:6"></div>
                        <div style="--i:7"></div>
                    </div>
                    <h1>Layout</h1>
                    <div class="gambarCP">
                        <img src="../images/CP/Content.jpg" alt="" width="80%" height="800px">
                    </div>
                    <button> Coming Soon </button>
                </div>
            </section>

            <section>
            @else
        @endif
    @endforeach
@endsection
