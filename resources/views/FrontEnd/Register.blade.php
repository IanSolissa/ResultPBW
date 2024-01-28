<!DOCTYPE html>
<html lang="en">



<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva+One:400,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTIX | REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/Register.css">
</head>

<body>
    <div class="container-sm d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="container">
            <h1 class="text-center">Let's join us!</h1>
            <hr>
            <div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh">
             
                <form action="/register" method="post" style="width: 70%;" class="d-flex justify-content-center align-items-center flex-wrap">
                    @csrf
                    <div class="mb-3" style="min-width: 60%;">
                       
                        <input placeholder="Username" name="username"  id="username" maxlength="50" type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                            style="height: 80px;" value="{{ old('username') }}">
                            @error('username')
                            <div class="invalid-feedback">
                               {{$message}}
                            </div>
                        @enderror
                        </div>
                    <div class="mb-3" style="min-width: 60%;">
                        <input placeholder="Email" name="email"  id="email" type="email" name="email" class="form-control @error('email') is-invalid @enderror" style="height: 80px;" value="{{ old('email') }}">
                    </div>
                    <div class="mb-3 wrapper" style="min-width: 60%;">
                        <input placeholder="Password"   type="password" name="password"
                            style="height: 80px;" id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                        <span>
                            <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="toggle()"></i>
                        </span>
                        @error('password')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    @enderror
                    </div>
                    
                    <div class="mb-3" style="min-width: 60%;">
                        <button type="submit" class="btn btn-lg btn-primary"
                            style="width: 100%; background-color: #000; height: 60px; border: none;">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="height: 10vh;">
        <footer>
            copyright &#169; 2023 Contix.m
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script>
         var state=false;
        function toggle(){
            if(state){
                document.getElementById("password").setAttribute("type", "password");
                state=false;
            } else {
                document.getElementById("password").setAttribute("type", "text");
                state=true;
            }
        }
        
        
    </script>
</body>