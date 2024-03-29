@extends('BackEnd.Dashboard.layouts.IndexDashboard')

@section('container-dashboard')

<section class="section">
    <div class="containerlistiket">
        @foreach ($Comment as $Comment)
         <ul>Konfirmasi Tiket
            <p>
                User : {{$Comment->fullName}}
            </p>
            <p>
                email : {{$Comment->email}}
            </p>
            <p>
                Phone : {{$Comment->phone}}
            </p>
            <p>
                Subject : {{$Comment->subject}}
            </p>
            <p>
                message : {{$Comment->message}}
            </p>
            <p>
                Create At : {{ $Comment->created_at->diffForHumans()}}
            </p>
            <p>
                <div>
                        <form action="/dashboard/contactus/{{ $Comment->id}}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                          <button type="submit" class="btn-delete d-inline red " onclick="return  confirm('Are You Sure, for delete this berita?')">
                              <span class="icon-wrapper">
                                <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                  <path d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                              </span>
                            </button>
                            </form>
                   
                </div>
            </p>
        </ul>
    
        @endforeach
    </div>
</section>


@endsection