@extends('FrontEnd.HomePage.SuperHomePageJB')
@section('container-JB')
    <!-- news section -->

    @foreach ($JB as $berita)
        @if ($berita->artis->nama_artis == 'Justinbieber')
            <section>
                <div class="hero">
                    <img src="/images/Justinpage/JB.png" alt="Justin World Tour" class="justin-img">
                </div>
            </section>
            <section id="news" class="news container">
                <h1>About Justice World Tour</h1>
                <p>The Justice World Tour, firmerly known as The Changes Tour and The Justin Bieber World Tour, is the
                    ongoing fourth concert tour by Canadian singer Justin Bieber. The tour is in support of his fifth and
                    sixth studio albums, Changes (2020) and Justice (2021).</p>
                <p>Promoted by T-Mobile, the tour was originally set to begin on May 14, 2020 in Seattle and to conclude on
                    September 26, 2020 in East Rutherford, New Hersey. However, due to concerns from COVID-19, all of the
                    original planned dates were postponed to 2021, then once again to 2022. The tour officially began on
                    February 18, 2022, in San Diego and is scheduled to conclude on March 25, 2023 in Krakow.</p>
            </section>
            <!-- news section end -->


            <!-- concert section -->
            <section id="concert" class="concert">

                <!-- set list -->
                <div class="set-list container">

                    <h1>Set List</h1>

                    <div class="cards">
                        <div class="card-grid">
                            <p>
                                "Somebody"<br>
                                "Hold On"<br>
                                "Desrve You"<br>
                                "Holy"<br>
                                "Where Are You Now"<br>
                                "What Do You Mean?"<br>
                                "Yummy"<br>
                                "Changes"<br>
                                "Love Yourself"<br>
                                "Off My Face"<br>
                                "Confident"<br>
                                "All That Matters"<br>
                                "Don't Go"
                            </p>
                        </div>
                        <div class="card-grid">
                            <p>
                                "Sorry"<br>
                                "Love You Different"<br>
                                "As I Am"<br>
                                "Ghost"<br>
                                "Lonely"<br>
                                "2 Much"<br>
                                "Intentions"<br>
                                "Boyfriend"<br>
                                "Baby"<br>
                                "Encore"<br>
                                "Peaches"<br>
                                "Anyone"
                            </p>
                        </div>
                    </div>
                </div>
                <!-- set list end -->

                <!-- layout -->
                <div class="layout container">

                    <h1>Layout</h1>

                    <div class="layout-container">
                        <div class="layout-item">
                            <img src="../../images/Justinpage/Screenshot 2023-09-17 at 12.21.50 PM.png" alt="">
                        </div>
                        <div class="layout-item nohandphone">
                            <img src="../../images/Justinpage/Screenshot 2023-09-17 at 12.21.56 PM.png" alt="">
                        </div>
                    </div>
                    <div class="layout-container handphone">
                        <div class="layout-item">
                            <img src="../../images/Justinpage/Screenshot 2023-09-17 at 12.21.56 PM.png" alt="">
                        </div>

                    </div>

                </div>

                <!-- layout end -->
            </section>

            <!-- concert section end -->


            <section>
                <div class="comingsoonJB">

                    <a href="/category" target="blank"> <button> Buy Ticket </button></a>
                </div>
            @else
        @endif
    @endforeach
    </section>

    {{-- bootsrap 5 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
@endsection
