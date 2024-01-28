@extends('BackEnd.Dashboard.layouts.IndexDashboard')

@section('container-dashboard')
    <section class="section">
        <h1>Yang Belum Bayar</h1>
        <div class="containerlistiket">
            @foreach ($Transaksi as $transaksi)
                @if ($transaksi->pembayaran == false)
                    <ul>Konfirmasi Tiket
                        <li>
                            User : {{ $transaksi->user->username }}
                        </li>
                        <li>
                            Tiket : {{ $transaksi->tiket->nama_tiket }}
                        </li>
                        <li>
                            Tiket : RP.{{ number_format($transaksi->total_pembayaran, 2) }}
                        </li>
                        <li>
                            <div>
                                <form action="/dashboard/list-tiket" method="post" class="d-inline">
                                    @csrf
                                    <input name="pembayaran" id="pembayaran" readonly hidden type="boolean" value=True>
                                    <input name="id" id="id" readonly hidden type="boolean"
                                        value={{ $transaksi->id }}>
                                    <button type="submit" class="btn-delete d-inline green cwhite"
                                        onclick="return  confirm('Are You Sure, for confirm this transaction?')">
                                        Confirm
                                    </button>
                                </form>
                                <form action="/dashboard/{{ $transaksi->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-delete d-inline red "
                                        onclick="return  confirm('Are You Sure, for delete this berita?')">
                                        <span class="icon-wrapper">
                                            <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </form>

                            </div>
                        </li>
                    </ul>
                @else
                @endif
            @endforeach
        </div>
    </section>
    <section class="section2">
        <h1>Yang sudah Bayar</h1>
        <div class="containerlistiket">
            @foreach ($Transaksi as $transaksi)
                @if ($transaksi->pembayaran != false)
                    <ul>Konfirmasi Tiket
                        <li>
                            User : {{ $transaksi->user->username }}
                        </li>
                        <li>
                            Tiket : {{ $transaksi->tiket->nama_tiket }}
                        </li>
                        <li>
                            Tiket : RP.{{ number_format($transaksi->total_pembayaran) }}
                        </li>
                        <li>
                            <div>
                                <form action="/category3/{{ $transaksi->id }}" method="get" class="d-inline">
                                    @csrf
                                    @method('put')
                                    <input name="pembayaran" id="pembayaran" readonly hidden type="boolean" value=True>
                                    <input name="id" id="id" readonly hidden type="boolean"
                                        value={{ $transaksi->id }}>
                                    <button type="submit" class="btn-delete d-inline"
                                        onclick="return  confirm('Are You Sure, for confirm this transaction?')">
                                        Confirm
                                    </button>
                                </form>
                                <form action="/dashboard/list-tiket/{{ $transaksi->id }}" method="post" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn-delete d-inline"
                                        onclick="return  confirm('Are You Sure, for delete this berita?')">
                                        <span class="icon-wrapper">
                                            <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24"
                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16"
                                                    stroke="#000000" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round"></path>
                                            </svg>
                                        </span>
                                    </button>
                                </form>

                            </div>
                        </li>
                    </ul>
                @else
                @endif
            @endforeach
        </div>
    </section>
@endsection
