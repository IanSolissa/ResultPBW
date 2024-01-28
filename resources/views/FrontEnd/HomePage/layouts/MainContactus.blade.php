<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Yeseva+One:400,700&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,700&display=swap">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CONTIX | CONTACT US</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="/CSS/ContactUs.css">
</head>

<body>
  <div class="container d-flex flex-column align-items-center justify-content-center" style="height: 90vh;">
    <div class="container">
      <h1 class="text-center mb-3">Contact Us</h1>
      <h5 class="text-center mb-5">send your message to us</h5>
      <hr>
    </div>
    <form method="POST" action="/dashboard/contactus" style="width: 100%; ">
     @csrf
        {{-- FULL NAME & EMAIL --}}
      <div class="container row m-0">
        <div class="col">
          <label for="fullname" class="form-label mb-2">Fullname<span style="color: red;"> *</span></label>
          <input value="{{ old('fullname') }}" type="text" class="form-control form-control-lg border border-dark py-3" placeholder="Fullname"
            aria-label="Fullname" id="Fullname" name="fullname">
        </div>
        <div class="col">
          <label for="Email" class="form-label mb-2">Email<span style="color: red;"> *</span></label>
          <input  value="{{ old('email') }}" type="email" class="form-control form-control-lg border border-dark py-3"
            placeholder="example@gmail.com" aria-label="Email" id="Email" name="email">
        </div>
      </div>

      {{-- PHONE & SUBJECT --}}
      <div class="container row m-0">
        <div class="col">
          <label for="phone" class="form-label my-2">Phone<span style="color: red;"> *</span></label>
          <input  value="{{ old('phone') }}" type="text" class="form-control form-control-lg border border-dark py-3" placeholder="phone"
            aria-label="Subject" id="Subject" name="phone">
        </div>
        <div class="col">
          <label for="Subject" class="form-label my-2">Subject<span style="color: red;"> *</span></label>
          <input  value="{{ old('subject') }}" type="text" class="form-control form-control-lg border border-dark py-3" placeholder="Subject..."
            aria-label="Subject" id="Subject" name="subject">
        </div>
      </div>

      {{-- MESSAGE --}}
      <div class="container m-0 mx-3">
        <label  for="message" class="form-label my-2">Comments<span style="color: red;"> *</span></label>
        <textarea name="message" id="message"  value="{{ old('message') }}" class="form-control border border-dark" placeholder="Your message goes here..." id="message"
          style="width: 98%; height: 150px;"></textarea>
      </div>

      {{-- BUTTON & FOOTER --}}
      <div class="mt-4 d-flex justify-content-around align-items-center" style="min-width: 60%;">
        <p><span style="color: red;"> *</span>required</p>
        <button type="submit" class="btn btn-lg btn-dark sendButton">send message</button>
        <p>contix.m</p>
      </div>
    </form>
    {{-- BUTTON SUBMIT --}}
  </div>
  <div class="container-fluid" style="height: 10vh;">
    <footer>
      copyright &#169; 2023 Contix.m
    </footer>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>