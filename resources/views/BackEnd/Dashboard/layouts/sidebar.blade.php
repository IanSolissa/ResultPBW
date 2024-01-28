<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-md offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        {{-- <img class="offcanvas-title" id="sidebarMenuLabel" src="../JPG/LogoPt"></img> --}}
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard') ? 'active' : '' }}"   aria-current="page" href="/dashboard">
              <svg height="20px" width="20px"   viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <g id="icomoon-ignore"> </g> <path d="M9.069 2.672v14.928h-6.397c0 0 0 6.589 0 8.718s1.983 3.010 3.452 3.010c1.469 0 16.26 0 20.006 0 1.616 0 3.199-1.572 3.199-3.199 0-1.175 0-23.457 0-23.457h-20.259zM6.124 28.262c-0.664 0-2.385-0.349-2.385-1.944v-7.652h5.331v7.192c0 0.714-0.933 2.404-2.404 2.404h-0.542zM28.262 26.129c0 1.036-1.096 2.133-2.133 2.133h-17.113c0.718-0.748 1.119-1.731 1.119-2.404v-22.12h18.126v22.391z" fill="#000000"> </path> <path d="M12.268 5.871h13.861v1.066h-13.861v-1.066z" fill="#000000"> </path> <path d="M12.268 20.265h13.861v1.066h-13.861v-1.066z" fill="#000000"> </path> <path d="M12.268 23.997h13.861v1.066h-13.861v-1.066z" fill="#000000"> </path> <path d="M26.129 9.602h-13.861v7.997h13.861v-7.997zM25.063 16.533h-11.729v-5.864h11.729v5.864z" fill="#000000"> </path> </g></svg>
              Create Berita
            </a>
          </li>
          <li class="nav-item">
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/list-tiket') ? 'active' : '' }}"   aria-current="page" href="/dashboard/tiket">
              <svg height="20px" width="20px" version="1.1" id="x32" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" xml:space="preserve" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <style type="text/css"> .st0{fill:#000000;} </style> <g> <path class="st0" d="M193.845,405.991c-6.248,0-11.324,5.062-11.324,11.318c0,6.255,5.077,11.325,11.324,11.325 c6.256,0,11.325-5.07,11.325-11.325C205.17,411.053,200.101,405.991,193.845,405.991z"></path> <path class="st0" d="M193.845,363.678c-6.248,0-11.324,5.069-11.324,11.325c0,6.248,5.077,11.318,11.324,11.318 c6.256,0,11.325-5.07,11.325-11.318C205.17,368.746,200.101,363.678,193.845,363.678z"></path> <path class="st0" d="M491.425,227.51H205.17h-2.075h-20.575h-79.706H82.241v20.567v211.537v20.575h20.574h79.706h20.575h2.075 h286.254H512v-20.575V248.077V227.51H491.425z M491.425,459.614H205.17c0-6.255-5.069-11.318-11.325-11.318 c-6.248,0-11.324,5.062-11.324,11.318h-79.706V248.077h79.706c0,6.255,5.077,11.318,11.324,11.318 c6.256,0,11.325-5.062,11.325-11.318h286.254V459.614z"></path> <path class="st0" d="M193.845,321.372c-6.248,0-11.324,5.069-11.324,11.324c0,6.248,5.077,11.318,11.324,11.318 c6.256,0,11.325-5.07,11.325-11.318C205.17,326.441,200.101,321.372,193.845,321.372z"></path> <path class="st0" d="M193.845,279.065c-6.248,0-11.324,5.062-11.324,11.318c0,6.256,5.077,11.325,11.324,11.325 c6.256,0,11.325-5.069,11.325-11.325C205.17,284.127,200.101,279.065,193.845,279.065z"></path> <polygon class="st0" points="117.846,196.225 369.458,59.702 449.357,206.934 472.755,206.934 387.535,49.881 377.73,31.811 359.638,41.61 108.048,178.148 106.224,179.133 88.14,188.939 18.084,226.961 0,236.774 9.813,254.859 61.673,350.425 61.673,307.289 27.898,245.046 61.673,226.709 "></polygon> </g> </g></svg>
              Create Tiket
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/list-tiket') ? 'active' : '' }}"   aria-current="page" href="/dashboard/list-tiket">
              <svg height="20px" width="20px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <path d="M8 6.00067L21 6.00139M8 12.0007L21 12.0015M8 18.0007L21 18.0015M3.5 6H3.51M3.5 12H3.51M3.5 18H3.51M4 6C4 6.27614 3.77614 6.5 3.5 6.5C3.22386 6.5 3 6.27614 3 6C3 5.72386 3.22386 5.5 3.5 5.5C3.77614 5.5 4 5.72386 4 6ZM4 12C4 12.2761 3.77614 12.5 3.5 12.5C3.22386 12.5 3 12.2761 3 12C3 11.7239 3.22386 11.5 3.5 11.5C3.77614 11.5 4 11.7239 4 12ZM4 18C4 18.2761 3.77614 18.5 3.5 18.5C3.22386 18.5 3 18.2761 3 18C3 17.7239 3.22386 17.5 3.5 17.5C3.77614 17.5 4 17.7239 4 18Z" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
              List Tiket
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/list-tiket') ? 'active' : '' }}"   aria-current="page" href="/dashboard/manageartis">
              <svg height="20px" width="20px" fill="#000000" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M16 15.503A5.041 5.041 0 1 0 16 5.42a5.041 5.041 0 0 0 0 10.083zm0 2.215c-6.703 0-11 3.699-11 5.5v3.363h22v-3.363c0-2.178-4.068-5.5-11-5.5z"></path></g></svg>
              Manage Artis
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  {{ Request::is('dashboard/list-tiket') ? 'active' : '' }}"   aria-current="page" href="/dashboard/contactus/create">
              <svg height="20px" width="20px"  viewBox="-0.5 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns" fill="#000000"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"> <title>comments</title> <desc>Created with Sketch Beta.</desc> <defs> </defs> <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage"> <g id="Icon-Set" sketch:type="MSLayerGroup" transform="translate(-257.000000, -255.000000)" fill="#000000"> <path d="M259,266.5 C259,261.254 263.753,257 270,257 C274.973,257 280,261.254 280,266.5 C280,271.747 276.075,276 270,276 C269.107,276 267.244,275.898 266.413,275.725 L263,278 L263,274.456 C260.561,272.477 259,269.834 259,266.5 L259,266.5 Z M266.637,277.736 C267.414,277.863 269.181,278 270,278 C277.18,278 282,272.657 282,266.375 C282,260.093 275.977,255 270,255 C262.811,255 257,260.093 257,266.375 C257,270.015 258.387,273.104 261,275.329 L261,281 L266.637,277.736 L266.637,277.736 Z M283.949,264.139 C283.968,264.425 284,264.709 284,265 C284,265.636 283.938,266.259 283.849,266.874 C285.195,268.45 286,270.392 286,272.5 C286,275.834 284.008,278.761 281,280.456 L281,284 L277.587,281.725 C276.756,281.898 275.893,282 275,282 C272.41,282 271.034,281.222 269.154,279.929 C268.609,279.973 268.059,280 267.5,280 C267.102,280 266.712,279.972 266.32,279.949 C268.701,282.276 271.149,283.75 275,283.75 C275.819,283.75 276.618,283.676 277.395,283.549 L283,287 L283,281.329 C286.04,279.246 288,276.015 288,272.375 C288,269.131 286.439,266.211 283.949,264.139 L283.949,264.139 Z M275.5,268 C276.329,268 277,267.329 277,266.5 C277,265.672 276.329,265 275.5,265 C274.671,265 274,265.672 274,266.5 C274,267.329 274.671,268 275.5,268 L275.5,268 Z M263.5,268 C264.329,268 265,267.329 265,266.5 C265,265.672 264.329,265 263.5,265 C262.671,265 262,265.672 262,266.5 C262,267.329 262.671,268 263.5,268 L263.5,268 Z M269.5,268 C270.329,268 271,267.329 271,266.5 C271,265.672 270.329,265 269.5,265 C268.671,265 268,265.672 268,266.5 C268,267.329 268.671,268 269.5,268 L269.5,268 Z" id="comments" sketch:type="MSShapeGroup"> </path> </g> </g> </g></svg>
              Comments
            </a>
          </li>

          {{-- fitur product --}}

          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/products') ? 'active' : '' }}" href="products">
              <svg class="bi"><use xlink:href="#cart"/></svg>
              Products
            </a>
          </li> --}}

          {{-- fitur Customers --}}
          {{-- <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/costumers') ? 'active' : '' }}" href="/customers">
              <svg class="bi"><use xlink:href="#people"/></svg>
              Customers
            </a>
          </li> --}}
        </ul>
        <hr class="my-3">
        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/homepage">
              <svg width=50px height="20px" class="bi"><use xlink:href="#door-closed"/></svg>
            Homepage
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
