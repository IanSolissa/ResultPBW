{{--  <nav class="navbar navbar-expand-lg" style="background-color: #0E293A;">
    <div class="container-fluid d-flex justify-content-around">
        <a class="navbar-brand" href="#" style="color:#fff; margin-left: 40px;">
            <H2>CONTIX</H2>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"
            style="background-color:#fff">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-flex justify-content-end " style="width: 95%;">
                <li class="nav-item" style="margin-right: 50px;">
                    <a class="nav-link" style="color: #fff;" href="/homepage/#spotlight">Spotlight</a>
                </li>
                <li class="nav-item" style="margin-right: 50px;">
                    <a class="nav-link" style="color: #fff;" href="/category">Concert</a>
                </li>
                <li class="nav-item" style="margin-right: 50px;">
                    <a class="nav-link" style="color: #fff;" href="/homepage/#footer">Contact Us</a>
                </li>
                <li class="nav-item dropdown" style="margin-left: 20px;">
                    <a class="nav-link dropdown-toggle" style="color: #fff;" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            @auth
                                <a href="/logout" align="center" class="dropdown-item">
                                    <p>Log Out</p>
                                </a>
                                <a href="/register" class="dropdown-item">
                                    <p>Register</p>
                                </a>
                                <a href="/logout" class="dropdown-item">
                                    <p>{{ auth()->user()->username }}</p>
                                </a>
                                @if (auth()->user()->role_user == 'admin')
                                    <a href="/dashboard" class="dropdown-item">
                                        <p>Dashboard</p>
                                    </a>
                                @endif
                            @endauth
                            @guest
                                <p align="center" class="dropdown-item">Register</p>
                            @endguest
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>  --}}

<nav>
    <ul class="nav1">
        <li><a href="/homepage" class="Contix">Contix</a></li>
        <li><a href="/homepage/#spotlight">Spotlight</a></li>
        <li><a target="blank" href="/category">Order</a></li>
        <li><a target="blank" href="https://wa.link/xnpkhj">Whatsapp</a></li>
        <li><a href="/dashboard/contactus">Contact Us</a></li>
    </ul>
    <ul class="nav2" onclick="subclassnav2()">Menu
        <ul class="subclassnav2">
            <li class="lisubclassnav2 none" ; id="idsubclassnav2">
                @auth

                    <a href="/logout" align="center">
                        <p>Log Out</p>
                    </a>
                    <a href="/register">
                        <p align="center">Register</p>
                    </a>
                    <a href="/logout" align="center">
                        <p>{{ auth()->user()->username }}</p>
                    </a>
                    @if (auth()->user()->role_user == 'admin')
                        <a href="/dashboard">
                            <p align="center">Dashboard</p>
                        </a>
                    @endif
                @endauth
                @guest
                    <p align="center">Register</p>
                @endguest
            </li>
        </ul>
    </ul>
    <p onclick="offsubclassnav2()" class="close">X</p>

    <script src="/JS/Navbar.js"></script>
</nav>
