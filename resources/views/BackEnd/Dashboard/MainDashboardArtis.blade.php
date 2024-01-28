@extends('BackEnd.Dashboard.layouts.IndexDashboard')

@section('container-dashboard')
{{-- <h1>{{ $artis->artis->implode('nama_artis') }}</h1> --}}
{{-- @if($artis->count()) --}}
@if(session()->has('succes'))
    <div class="alert alert-success" role="alert" style="animation: opacitylogin 2s ">
      {{ session('succes')}}
    </div>
    @endif

<a  href="/dashboard/manageartis/create" class="btn btn-primary mb-3">Create Project</a>


@foreach ($Artis as $artis)
<div class="table-responsive small">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
          <th scope="col">Nama Artis </th>
          <th scope="col"></th>
          <th scope="col" >action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>{{ $artis->nama_artis }}</td>
                 <td>
            <a href="/dashboard/manageartis/{{$artis->id}}/edit">
              <button class="btn-delete d-inline">
                <span class="icon-wrapper bg-color-yellow">
                  <svg class="icon-edit " width="25px" height="34px" viewBox="0 -0.5 21 21" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>edit [#1479]</title> <desc>Created with Sketch.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"> <g id="Dribbble-Light-Preview" transform="translate(-99.000000, -400.000000)" fill="#000005"> <g id="icons" transform="translate(56.000000, 160.000000)"> <path d="M61.9,258.010643 L45.1,258.010643 L45.1,242.095788 L53.5,242.095788 L53.5,240.106431 L43,240.106431 L43,260 L64,260 L64,250.053215 L61.9,250.053215 L61.9,258.010643 Z M49.3,249.949769 L59.63095,240 L64,244.114985 L53.3341,254.031929 L49.3,254.031929 L49.3,249.949769 Z" id="edit-[#1479]"> </path> </g> </g> </g> </g></svg>
                </span>
              </button>
            </a>
        </td>
          <td>
            <form action="/dashboard/manageartis/{{$artis->id}}" method="post" class="d-inline">
              @csrf
              @method('delete')
            <button type="submit" class="btn-delete d-inline" onclick="return  confirm('Are You Sure, for delete this artis?')">
                <span class="icon-wrapper">
                  <svg class="icon" width="30px" height="30px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 7V18C6 19.1046 6.89543 20 8 20H16C17.1046 20 18 19.1046 18 18V7M6 7H5M6 7H8M18 7H19M18 7H16M10 11V16M14 11V16M8 7V5C8 3.89543 8.89543 3 10 3H14C15.1046 3 16 3.89543 16 5V7M8 7H16" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                  </svg>
                </span>
              </button>
              </form>
        </td>
         </tr>


      </tbody>
    </table>
  </div>

@endforeach
{{-- @else
<div>
<h1>artis kosong</h1>
</div>

@endif --}}

@endsection