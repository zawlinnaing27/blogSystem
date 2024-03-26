<nav class="navbar navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="/">Safe__Zone</a>
      <div class="d-flex">
        <a href="/" class="nav-link">Home</a>
        <a href="all-blogs" class="nav-link">Blogs</a>

        @if (!auth()->check())
        <a href="/register" class="nav-link">Register</a>
        <a href="/login" class="nav-link">Login</a>

        @else
        <a href="" class="nav-link">Welcome {{auth()->user()->name}}</a>
        <form method="Post" action="/logout" >
            @csrf
            <button type='submit' href="" class="nav-link btn btn-link">Logout</button>
        </form>
        @endif
        <a href="#subscribe" class="nav-link">Subscribe</a>
      </div>
    </div>
  </nav>
