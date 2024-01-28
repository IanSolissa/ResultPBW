{{-- ini jangan di hapus yak buat tamplate --}}

@extends('FrontEnd.tiket.Supertiket')
@section('container_TiketCategory')
    <section>
        <div class="content1 JB">
            <ul>
                <li>
                    Justin BIEBER

                </li>
                <li>

                </li>

                <li>
                    <h1>Justice</h1>
                </li>
            </ul>
        </div>
    </section>
    <section>
        <div class="JC2 JC2checkout">
            <ul>
                <li class="WarnalatarJC2 checkoutjustice">
                    <a href="#" class="colorgreen"></a>
                    {{--  <p class="colorgreen">__________________________________________________ </p>  --}}

                </li>

            </ul>
        </div>
        <div class="Page">

            <ul>
                <li>
                    <a href="/category">Category</a>
                </li>
                <li>
                    <a href="/category/checkout">Checkout tiket</a>
                </li>
                <li>

                    <a href="#">Your tiket</a>
                </li>
            </ul>
        </div>
    </section>
    <section class="kontainer-section">
        <section class="checkout">
            <div class="kontainer">
                @foreach ($Transaksi as $transaksi)
                    {{-- ini buat yang belum bayar --}}
                    @if ($transaksi->pembayaran == false)
                        <div class="card animation">
                            <h1>Tiket Locked</h1>
                            <h1>Transaction pending...</h1>
                        </div>
                    @else
                    @endif
                @endforeach
            </div>
            <div class="kontainer">
                @foreach ($Transaksi as $transaksi)
                    @if ($transaksi->pembayaran == true)
                        @if ($loop->odd)
                            <div class="card animation2">
                                <div class="gambartiket">
                                    <img src="../images/Justinpage/e-ticket/tiket1.png" alt="">
                                    <img src="../images/Justinpage/e-ticket/tiket2.png" alt="">
                                </div>
                                {{--  <h1>{{ $transaksi->tiket->nama_tiket }}</h1>  --}}

                                <div>
                                    <a href="/category/checkout/{{ $transaksi->id }}"><button>Lihat tiket</button></a>
                                </div>
                            </div>
                        @else
                            <div class="card animation2bawah">
                                <div class="gambartiket">
                                    <img src="../images/Justinpage/e-ticket/tiket1.png" alt="">
                                    <img src="../images/Justinpage/e-ticket/tiket2.png" alt="">
                                </div>
                                <h1>{{ $transaksi->tiket->nama_tiket }}</h1>

                                <div>
                                    <a href="/category/checkout/{{ $transaksi->id }}"><button>Lihat tiket</button></a>
                                </div>
                            </div>
                        @endif
                    @else
                    @endif
                @endforeach
            </div>
        </section>
    </section>
@endsection
