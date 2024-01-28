<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../../CSS/Navbarr.css">
    <link rel="stylesheet" href="../../CSS/HomePage.css">
    <!-- my css -->
    <link rel="stylesheet" href="CSS/JustinPage.css">
    {{-- bootsrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="../CSS/Navbarr.css">
        <link rel="stylesheet" href="../CSS/HomePage.css">
        <link rel="stylesheet" href="/CSS/mainpage2.css">
    
</head>

<body>
    @include('FrontEnd.layouts.Navbar')
    <main>
        @yield('container-JB')
    </main>
    @include('FrontEnd.layouts.FooterHomePage')
</body>

</html>
