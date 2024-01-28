@extends('FrontEnd.Homepage.layouts.MainHomePage')

@section('content-HomePage')

@if($user->count()>0)
@foreach($user as $users)

{{-- ini fitu buat nampilin siapa yang lagi login, tapi untuk sementara gabisa digunain dulu --}}
{{-- Welcome Back, {{ auth()->user()->name }} --}}

<div class="container" 
style=
"
display:flex;
justify-content:center;
align-items:center;
width:100%;
height:100vh
">
    <div class="wrapper">
        <h1>Welcome Back, {{ $users->name}}</h1>
    </div>
</div>


@endforeach
@else
<div class="container" 
style=
"
display:flex;
justify-content:center;
align-items:center;
width:100%;
height:100vh
">
    <div class="wrapper">
        <h1>coba buka connect ke database dulu</h1>
        <h1>connect database nya di bagian env</h1>
        <h1>buka terminal</h1>
        <h1>php artisan migrate:fresh --seed</h1>
        <h1>refresh halaman.</h1>
    </div>
</div>
@endif

@endsection