@extends('FrontEnd.HomePage.SuperHomePage')

@section('container')
    @if ($Berita->count() > 0)
        @foreach ($Berita as $berita)
        @endforeach
        <section class="w-100">
            <div class=" w-100 container-fluid d-flex justify-content-center align-items-center first__content ">
                <div class="container d-flex justify-content-center align-items-center ">
                    {{-- Buat-circle --}}
                    <img src="/images/homepage/Ellipse 20.png" alt="circle" class="ellipse  animationatasbawah">
                    {{-- Buat-text --}}
                    <h1 class="noise__text text-white text-center  animationatasbawah delay">Let’s <br> Make Some <br> Noise
                    </h1>
                    <img src="/images/homepage/Ellipse4_WHITE.png" alt="circle_bottom" class="ellipse bottom">
                    <img src="/images/homepage/Ellipse4_WHITE.png" alt="circle_bottom" class="ellipse bottom__second">
                    <img src="/images/homepage/wave.png" alt="wave" class="wave">
                    <img src="/images/homepage/wave2.png" alt="wave" class="wave left_wave ">
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid" style="min-height: 100vh;">
                <div class=" container d-flex justify-content-center align-items-end text-center mb-3"
                    style="height: 20vh;">
                    {{-- <img src="/images/homepage/Sparkle.png" alt="Sparkle" class="sparkle"> --}}
                    <h1 class="spotlight" id="spotlight">Spotlight</h1>
                </div>
                <div class=" flex-wrap container-fluid d-flex justify-content-around flex-row mt-5 w-100">
                    @foreach ($Berita as $berita)
                        @if ($loop->odd)
                            @if ($berita->spotlight == 1)
                                @if ($berita->artis->nama_artis = 'Pinkfloyd')
                                    <div class="contentian card mb-3 card__shadow border  border-dark border-2"
                                        style="max-width: 540px;min-height: 200px;">
                                        <div class="row g-0  ">
                                            <div class="col-md-5 border-2 img_section ">
                                                <img src="/upload_foto_pinkfloyd/{{ $berita->gambar }}"
                                                    class="rounded img__frame" alt="...">
                                                <div class="mt-2 text-center ">
                                                    <a class="btn border border-dark "
                                                        href="/{{ $berita->artis->nama_artis }}"
                                                        role="button">{{ $berita->artis->nama_artis }}</a>
                                                    <a class="btn border border-dark" href="#"
                                                        role="button">music</a>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="card-body">
                                                    <h5 class="card-title"> {{ $berita->judul_berita }}
                                                    </h5>
                                                    <hr>
                                                    <p class="card-text">{{ $berita->excerpts }}</p>
                                                    <div class="text-end margin_hosted">
                                                        <img src="/images/homepage/hosted_by.png" alt="hostedby">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                            @endif
                        @else
                            @if ($berita->spotlight == 1)
                                @if ($berita->artis->nama_artis = 'tulus')
                                    <div class="contentian2 card mb-3 card__shadow border  border-dark border-2"
                                        style="max-width: 540px;min-height: 200px;">
                                        <div class="row g-0  ">
                                            <div class="col-md-5 border-2 img_section ">
                                                <img src="/upload_foto_tulus/{{ $berita->gambar }}"
                                                    class="rounded img__frame" alt="...">
                                                <div class="mt-2 text-center ">
                                                    <a class="btn border border-dark "
                                                        href="/{{ $berita->artis->nama_artis }}"
                                                        role="button">{{ $berita->artis->nama_artis }}</a>
                                                    <a class="btn border border-dark"
                                                        href="/{{ $berita->artis->nama_artis }}" role="button">music</a>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="card-body">
                                                    <h5 class="card-title"> {{ $berita->judul_berita }}
                                                    </h5>
                                                    <hr>
                                                    <p class="card-text">{{ $berita->excerpts }}</p>
                                                    <div class="text-end margin_hosted">
                                                        <img src="/images/homepage/hosted_by.png" alt="hostedby">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            @else
                            @endif
                            @if ($berita->spotlight == 1)
                                @if (
                                    $berita->artis->nama_artis != 'Pinkfloyd' &&
                                        $berita->artis->nama_artis != 'tulus' &&
                                        $berita->artis->nama_artis != 'coldplay' &&
                                        $berita->artis->nama_artis != 'Justinbieber')
                                    <div class="contentian card mb-3 card__shadow border  border-dark border-2"
                                        style="max-width: 540px;min-height: 200px;">

                                        <div class="row g-0  ">
                                            <div class="col-md-5 border-2 img_section ">
                                                <img src="/upload_foto_beritadefault/{{ $berita->gambar }}"
                                                    class="rounded img__frame" alt="...">
                                                <div class="mt-2 text-center ">
                                                    <a class="btn border border-dark " href="/News/{{ $berita->id }}"
                                                        role="button">{{ $berita->artis->nama_artis }}</a>
                                                    <a class="btn border border-dark" href="#"
                                                        role="button">music</a>
                                                </div>
                                            </div>
                                            <div class="col-md-7">
                                                <div class="card-body">
                                                    <h5 class="card-title"> {{ $berita->judul_berita }}
                                                    </h5>
                                                    <hr>
                                                    <p class="card-text">{{ $berita->excerpts }}</p>
                                                    <div class="text-end margin_hosted">
                                                        <img src="/images/homepage/hosted_by.png" alt="hostedby">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                @endif
                            @endif
                        @endif
                    @endforeach


                </div>

        </section>
        <section>
            <div class="w-100  container-fluid upcoming" style="min-height: 100vh;">
                <div class="  container title d-flex justify-content-center align-items-center upcoming">
                    <h1 class="animasiupcoming">Upcoming Concert</h1>
                    <img src="/images/homepage/Scribble.png" alt="Scribble" class="scribble">
                </div>
                <div
                    class=" w-inherit m-auto container mt-2 d-flex justify-content-between flex-row w-inherit overflow-hidden">
                    @foreach ($Tiket as $tiket)
                        <div class="m-3 contentian2 card mb-3 card_shadow card_upcoming overflow-hidden">

                            @if ($tiket->gambar == null)
                                <img width=75px; height=250px src="{{ asset('storage/' . $tiket->berita->gambar) }}"
                                    class="card-img-top img_upcoming" alt="...">
                            @else
                                <img width=75px; height=250px src="{{ asset('upload_foto/' . $tiket->gambar) }}"
                                    class="card-img-top img_upcoming" alt="...">
                            @endif
                            <div class="  card-body">
                                <p class="card-text mb-1"><small class="text-body-secondary">concert</small></p>
                                <h5 class="card-title">{{ $tiket->nama_tiket }}</h5>
                                <p><i class="fa fa-calendar card-text" aria-hidden="true" style="margin-right: 5px"></i>
                                    {{ $tiket->tanggal_konser }}</p>
                                <p><i class="fa fa-clock-o card-text" aria-hidden="true"
                                        style="margin-right: 10px"></i>{{ $tiket['created_at']->diffForHumans() }}</p>
                                <p><i class="fa fa-map-marker card-text" aria-hidden="true"
                                        style="margin-right: 15px"></i>{{ $tiket->lokasi_tiket }}</p>
                            </div>
                            <div class="text-center mb-3">
                                {{-- LINK KE COLDPLAY PAGE --}}
                                <a class="btn btn-dark px-4 py-3" href="/{{ $tiket->berita->artis->nama_artis }}"
                                    role="button">more...</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @else
        <div style="display: flex; height: 100vh; width: 100%">
            <h1 style="margin:auto;">Comming Soon!!</h1>
        </div>
    @endif
@endsection
