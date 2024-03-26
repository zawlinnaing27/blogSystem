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
          <p class="fs-6 text-secondary">
            {{$blog->name}}
            <span> - {{$blog->created_at->diffForHumans()}}</span>
          </p>
          <div class="tags my-3">
            <span class="badge bg-primary">{{$blog->category->name}}</span>

          </div>
          <p class="lh-md">
            {{$blog->body}}
          </p>
        </div>
      </div>
    </div>
        
                <x-comment  :comments="$blog->comments"/>
    <!-- subscribe new blogs -->
                <x-subscribe />
    <section class="blogs_you_may_like">

                    <x-blog_you_may_like_section :randomBlogs="$randomBlogs" />

          </section>





      {{-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          @foreach ($blogs->chunk(1) as $key => $blogChunk)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></button>
          @endforeach
        </div>

        <div class="carousel-inner">
          @foreach ($blogs->chunk(1) as $key => $blogCollections )


            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="5000">
              @foreach ($blogCollections as $blogCollection )
              <a href="{{ route('blog:detail', ['blog' => $blogCollection->id]) }}">
                <img src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg" class="w-25 h-25" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>{{ $blogCollection->title }}</h5>

                  <p>{{ $blogCollection->intro }}</p>
                </div>
              </a>
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
 --}}

@endsection



