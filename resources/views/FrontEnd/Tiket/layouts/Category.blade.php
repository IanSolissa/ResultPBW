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
                <li class="WarnalatarJC2">
                    <a href="#" class="colorgreen"></a>
                    {{--  <p class="colorgreen">__________________________________________________ </p>  --}}

                </li>

            </ul>
        </div>
        <div class="Page">

            <ul>
                <li>
                    <a href="">Category</a>
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

    <section>
        @foreach ($Tiket as $tiket)
            <div class="content3">
                <table border="2px" cellspacing="20">
                    <tr align="center">
                        <td colspan="1" style="width: 35%">
                            Category
                        </td>
                        <td colspan="1" style="width: 30%">
                            Price
                        </td colspan="1">
                        <td style="width: 40%">
                            Jumlah Maks Pesanan
                        </td>
                    </tr>
                    <tr align="center">
                        <td>
                            {{ $tiket->category }}
                        </td>
                        <td>
                            RP. {{ number_format($tiket->harga_tiket, 2) }}
                        </td>
                        <td>
                            3
                        </td>
                    </tr>
                </table>
                <a href="/category/tiket/{{ $tiket->nama_tiket }}"><button>Order now</button></a>
            </div>
        @endforeach

    </section>
@endsection
