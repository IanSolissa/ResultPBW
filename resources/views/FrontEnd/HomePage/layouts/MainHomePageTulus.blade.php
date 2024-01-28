@extends('FrontEnd.HomePage.SuperHomePageTulus')
@section('container-tulus')

@foreach($tulus as $Tulus)
<section>
    <div class="ContentTulus3 animations">
    <div class="slider">
        <button onclick="PrevSlider(1),fadein()" id="clicker" class="pref"><</button>
        <img src="../images/tuluspage/tulus.png" alt="" width="80%" height="500px" id="imageslider">
        {{-- <img src="../images/Justinpage/JB.png" alt="" width="80%" height="500px" class=".imagesider"> --}}
        <button onclick="PrevSlider(1),fadeout()" id="clicker" class="next">></button>
    </div>
</div>
</section>

<section class="handphone">

    <div class="kontainer">
        <img src="../images/tuluspage/tulus.png" alt="" width="100%" height="500px">
    </div>

</section>
<section>
    <div class="ContentTulus fadein">
        <h1>{{  $Tulus->judul_berita}}</h1>
    </div>
</section>
<section>
    <div class="ContentTulus2 ">
        {!! $Tulus->isi_berita !!}
        @endforeach

</div>
</section>




@endsection
