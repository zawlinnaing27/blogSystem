{{-- <nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/"></a>
      <div class="d-flex">
        <a href="/" class="nav-link text-white ">Home</a>
        <a href="all-blogs" class="nav-link text-white">Blogs</a>

        @if (!auth()->check())
        <a href="/register" class="nav-link text-white">Register</a>
        <a href="/login" class="nav-link text-white">Login</a>

        @else

        <a href="" class="nav-link text-white">Welcome {{auth()->user()->name}}</a>
        <img class="rounded-circle" width="50" height="50" src="{{auth()->user()->profile_pic}}" alt="">
        <form method="Post" action="/logout" class="text-white">
            @csrf
            <button type='submit' href="" class="nav-link btn btn-link text-white">Logout</button>
        </form>
        @endif

      </div>
    </div>
  </nav> --}}

  <nav class="navbar navbar-expand-lg bg-body-tertiary ">
    <div class="container-fluid ms-5">
      <a class="navbar-brand" href="/">Safe__Zone</a>
      <div class="collapse navbar-collapse mt-2" id="navbarText">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="navbar-text">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="navbar-text">
            <a class="nav-link" href="all-blogs">Blogs</a>
          </li>

          <li class="navbar-text ">
            <a href="#subscribe" class="nav-link">Subscribe</a>
          </li  >
        </ul>
            <div class="d-flex me-5">
                @if (!auth()->check())
                <div class="nav-item me-auto">
                    <a href="/register" class="nav-link me-2">Register</a>
                </div>
                    <div class="nav-item">
                        <a href="/login" class="nav-link">Login</a>
                    </div>
            @else
           <div class="nav-item me-3">
            <a href="" class="nav-link ">Welcome {{auth()->user()->name}}</a>
           </div>
           <div class="nav-item me-3">
            <img class="rounded-circle" width="50" height="50" src="{{auth()->user()->profile_pic}}" alt="">
           </div>
            <form method="Post" action="/logout" >
                @csrf
                <button type='submit' href="" class="nav-link btn btn-link">Logout</button>
            </form>
            @endif
            </div>
      </div>
    </div>

  </nav>
