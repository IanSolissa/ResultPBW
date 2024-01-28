@extends('FrontEnd.HomePage.SuperHomePagePinkFloyd')
@section('container-PinkFloyd')
    @foreach ($Berita as $berita)
        @if ($berita->artis->nama_artis == 'Pinkfloyd')
            <section>
                <div class="content1 PinkFloyd">
                    <ul>
                        <li style="--i:9;" class="P">P</li>
                        <li style="--i:8;" class="P">I</li>
                        <li style="--i:7;" class="P">N</li>
                        <li style="--i:6;" class="P">K</li>
                        <li style="--i:5;" class="F">F</li>
                        <li style="--i:4;" class="P">L</li>
                        <li style="--i:3;" class="P">O</li>
                        <li style="--i:2;" class="P">Y</li>
                        <li style="--i:1;" class="P">D</li>
                    </ul>
                </div>
            </section>
            <section>
                <div class=" PinkFloyd2">
                    <div>
                        <h1>{{ $berita->judul_berita }}</h1>
                        <p>_______________________________________________________________________</p><br>
                        <div class="isiberita">
                            <p> {!! $berita->isi_berita !!}</p>
                        </div>

                        </p>
                    </div>
                </div>
            </section>

            <section>
                <div class="content3 PinkFloyd3">
                    <iframe src="https://www.youtube.com/embed/saEpkcVi1d4?si=IXD2sJIAGmdDx2Cz" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </section>
        @else
        @endif
    @endforeach



    <section>
    @endsection
