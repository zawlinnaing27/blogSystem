@extends('layout/main')

@section('title', 'Page Title')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto text-center">
      <img
        src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
        class="card-img-top"
        alt="..."
      />
          <h3 class="my-3 ">{{$blog->title}}</h3>
          <p class="lh-md">
            {{$blog->body}}
          </p>
        </div>
      </div>
    </div>

    <!-- subscribe new blogs -->
    <section class="container my-4 text-center" id="subscribe">
      <div class="row">
        <div class="col-md-6 mx-auto">
          <h3 class="fw-bold mb-4">Subscribe For new blogs</h3>
          <form>
            <div class="mb-3">
              <input
                placeholder="Email Address"
                type="email"
                class="form-control"
                autocomplete="false"
              />
            </div>
            <button type="submit" class="btn btn-primary">Subscribe Now</button>
          </form>
        </div>
      </div>
    </section>
    <section class="blogs_you_may_like">
      <div class="container">
        <h3 class="text-center my-4 fw-bold">Blogs You May Like</h3>
        {{-- @foreach ($blogs->chunk(4) as $blogCollections )
        <div class="row text-center">

          @foreach ( $blogCollections as $blogCollection )
          <div class="col-md-4 mb-4">
            <div class="card">
              <img
                src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
                class="card-img-top"
                alt="..."
              />
              <div class="card-body">
                <h3 class="card-title">{{$blogCollection->title}}</h3>
                <p class="fs-6 text-secondary">
                  {{$blogCollection->name}}
                  <span> - 2days ago</span>
                </p>
                <div class="tags my-3">
                  <span class="badge bg-primary">Html</span>
                  <span class="badge bg-secondary">Css</span>
                  <span class="badge bg-success">Php</span>
                  <span class="badge bg-danger">Javascript</span>
                  <span class="badge bg-warning text-dark">Frontend</span>
                </div>
                <p class="card-text">
                  {{$blogCollection->intro}}
                </p>
                <a href="{{ route('blog:detail', ['blog' => $blogCollection->id]) }}" class="btn btn-primary">Read More</a>
              </div>
            </div>

        </div>
        @endforeach

      </div>
      @endforeach --}}



      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          @foreach ($blogs->chunk(1) as $key => $blogChunk)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></button>
          @endforeach
        </div>

        <div class="carousel-inner">
          @foreach ($blogs->chunk(1) as $key => $blogCollections )
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="10000">
              @foreach ($blogCollections as $blogCollection )
                <img src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg" class="w-25 h-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{{ $blogCollection->title }}</h5>
                  <p>{{ $blogCollection->intro }}</p>
                </div>
              @endforeach
            </div>
          @endforeach
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


@endsection



