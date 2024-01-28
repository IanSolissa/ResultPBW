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
        <div class="JC2">
            <ul>
                <li class="WarnalatarJC2 TiketOrder">
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



    <section class="Etiket">
        <div class="kontainer">
            @if ($transaksi->tiket->gambar == null)
                <h1 style="background:red; text-align:center; width:100%; height:auto; margin:auto;">Maaf Website Sedang
                    Bermasalah....</h1>
            @else
                <div class="gambartiket">
                    <img src="/images/Justinpage/e-ticket/tiket1.png" alt="">
                    <img src="/images/Justinpage/e-ticket/tiket2.png" alt="">
                </div>
            @endif
        </div>
    </section>
    <section class="navigasion">
        <div class="kontainer">
            <a href="/category/checkout"><button>
                    <h1>Back</h1>
                </button></a>
            <a type="file" href="/images/Justinpage/e-ticket/tiket1.png" download target="blank"> <button>
                    <h1>download</h1>
                </button></a>
            <a href="/thanks"> <button>
                    <h1>next</h1>
                </button></a>

        </div>
    </section>
@endsection
