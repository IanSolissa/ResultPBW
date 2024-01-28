<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    {{-- punya farhan --}}
      <link rel="stylesheet" href="/CSS/mainpage2.css">
    {{-- punya yosua --}}
<script src="/JS/Homepage.js"></script>
    <link rel="stylesheet" href="/CSS/Navbarr.css">
    <link rel="stylesheet" href="/CSS/HomePage.css">
    <title>CONTIX | MAINPAGE</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
  <script src="/JS/Category.js"></script>
</head>
<body>
    @include('FrontEnd.layouts.Navbar')
  <main>
    @yield('container')
</main>
<footer>
    @include('FrontEnd.layouts.FooterHomePage')
  </footer>
  </body>
</html>