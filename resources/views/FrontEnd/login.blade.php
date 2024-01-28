<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva+One:400,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=+, initial-scale=1.0">
    <title>CONTIX</title>

    {{-- bootsrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    {{-- my css --}}
    <link rel="stylesheet" href="CSS/Login.css">
</head>

<body>
    <section>
        {{-- header --}}
        <header class="container">
            <h1>Welcome back!<br>Glad to see you again</h1>
            <hr>
        </header>
        {{-- form --}}

        @if (session()->has('failed'))
            <div role="alert"
                style="font-size:1.2em;
font-style:italic;
position: relative;
bottom:100%;
width:100%;
display:flex;
justify-content:center;
color: red;
animation: opacity 3s;
animation-duration: 5s;
opacity: 0;  ">
                {{-- pesan --}}
                {{ session('failed') }}
            </div>
        @endif
        <form method="POST" action="/login" class="container">
            @csrf
            <div class="form-item">
                <input name="email" id="email" type="email" placeholder="Enter your email" required
                    value="{{ old('email') }}" class="@error('email') is-invalid @enderror">
                @error('email')
                    {{ $message }}
                @enderror
                <input name="password" id="password" type="password" placeholder="Enter your password"
                    value="{{ old('password') }}" class="@error('password') is-invalid @enderror" required>
                <img src="/images/fluent_eye-20-filled.png" alt="fluent-eye" id="fluent-eye">
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
                {{-- button --}}
            </div>


            <div class="container">
                <button type="submit" class="login-btn">Login</button>
                <p class="register-btn">If you don't have an account, <a href="/register">Register</a> here</p>
            </div>

        </form>

</body>

</html>
{{-- bootsrap 5 --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

{{-- my js --}}
<script src="JS/Login.js"></script>
