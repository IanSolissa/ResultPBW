@extends('BackEnd.Dashboard.layouts.CreateDashboardCustomer')

@section('container-create')
<?php
$Jumlah;
?>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create News</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
        </div>
    </div>
</div>

    <div class="col-lg-8">
        <form method="POST" action="/category/tiket/post" enctype="multipart/form-data" >
            @csrf
            {{-- Category tiket --}}
            @foreach($Harga as $Harga2)
            @endforeach
            <input hidden name="username" id="username" type="text"  readonly value="{{ auth()->user()->username }}">
            <input hidden name="id_user" id="id_user" type="id" readonly value="{{ auth()->user()->id }}">
            <input hidden name="id_tiket" id="id_tiket" type="id" readonly value="{{ $Harga2->id }}">
            {{-- <input  name="total_pembayaran" id="total_pembayaran" type="number" readonly value="{{ $Harga2->harga_tiket }}"> --}}
            
            <div class="mb-3">
                <label for="nama_tiket" >Nama Tiket</label>
                {{-- <input type="text" class="form-control" readonly onclick="GetHarga({{$Harga2->harga_tiket}},0)" value="{{ $Harga2->nama_tiket}}"></input> --}}
                <input name="nama_tiket" type="text" class="form-control" readonly value="{{ $Harga2->nama_tiket }}"></input>
                
            </div>
            <div class="mb-3">
                <label for="lokasi_tiket" >Lokasi Tiket</label>
                {{-- <input type="text" class="form-control" readonly onclick="GetHarga({{$Harga2->harga_tiket}},0)" value="{{ $Harga2->lokasi_tiket}}"></input> --}}
                <input name="lokasi_tiket" type="text" class="form-control" readonly value="{{ $Harga2->lokasi_tiket }}"></input>
                
            </div>
            <div class="mb-3">
                <label for="category" >Category Tiket</label>
                {{-- <input type="text" class="form-control" readonly onclick="GetHarga({{$Harga2->harga_tiket}},0)" value="{{ $Harga2->category}}"></input> --}}
                <input name="category" type="text" class="form-control" readonly value="{{ $Harga2->category }}"></input>
                
            </div>
@foreach($Harga as $Harga)
@endforeach
            {{-- Nama Project --}}
            <div class="mb-3">
                <label for="total_pembayaran">Harga Tiket</label>
                <input readonly id="total_pembayaran" type="number" name="total_pembayaran" class="form-control" value={{$Harga->harga_tiket}}>
                @error('total_pembayaran')
                <div class="pesaneror">
                    {{ $message }}
                </div>
                @enderror
                
            </div>

            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity</label>
                @foreach ($Tiket as $Tiket)
                @endforeach
                
                <select name="quantity" class="form-select" id="quantity" autofocus  onclick="Setharga({{$Harga->harga_tiket}}*value)">
                    @for ($i = 0; $i < $Harga->quantity ; $i++)
                    {{-- <option name='quantity'; class="quantity"; id='quantity'; onclick=Setharga({{$i+1}},{{$Harga->harga_tiket}}); value={{ $i+1 }};>{{$i+1}}</option> --}}
                    <option class="OptionQuantity" value{{$i+1}}>{{$i+1}}</option>
                     @endfor
                </select>
                </div>  
                {{-- <p type="none" onclick=Setharga() >asd</p> --}}
            <button type="submit"; class="btn btn-primary"; style="margin-top:3%";>Create Tiket</button>
        </form>
    </div>
<script>
    function Setharga(result){
        let harga=document.getElementById('total_pembayaran')
        // let Option=document.getElementsByClassName('OptionQuantity')
        // let select=document.getElementById('quantity')
        // console.log("masuk");
    console.log(result);
        // let Harga={{$Tiket->harga_tiket}};
        // alert( test);
        harga.setAttribute("value",result);
 
        console.log(harga.value);
        // let testing=harga.value;
        // console.log(testing);
    }
</script>
    <script>
     
        {{-- matikan script gambar --}}
        document.addEventListener('trix-file-accept', function(e) {
            e.preventDefault();
        });
    </script>

@endsection
