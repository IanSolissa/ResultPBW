<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="CSS/Navbarr.css">
    <link rel="stylesheet" href="CSS/HomePage.css">
</head>
<body>
    {{-- @include('Front-End.layouts.Navbar') --}}
  <main>
<h1>Thank You, {{ Auth()->user()->username }}</h1> 
@foreach($result as $hasil)
@endforeach
<h1>{{ $hasil->user }}</h1> 
<a href="/homepage"><button>HOME</button></a>  
</main>
    {{-- @include('FrontEnd.layouts.FooterHomePage') --}}
</body>
</html>