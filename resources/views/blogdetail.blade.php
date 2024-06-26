@extends('layout/main')

@section('title', 'Page Title')
@section('content')
<div class="container mt-5">
  <div class="row">
    <div class="col-md-6 mx-auto text-center">
      <img
        src='{{asset("storage/$blog->thumbnail")}}'
        class="card-img-top rounded"
        alt="..."
      />
          <h3 class="my-3 ">{{$blog->title}}</h3>
          <div class="tags my-3">
            <span class="badge bg-primary">{{$blog->category->name}}</span>

          </div>
          <p class="fs-6 text-secondary">
            {{$blog->name}}
            <span> - {{$blog->created_at->diffForHumans()}}</span>
          </p>
          <div  class="tags my-3">
                  <form action="{{route('subscriptionHandler',['blog'=>$blog])}}" method="POST">
                    @csrf
                   @auth
                   @if (auth()->user()->isSubscribed($blog) )
                   <button  class="btn btn-danger">Unsubscribe</button>
                   @else
                   <button  class="btn btn-success">Subscribe</button>
                   @endif
                   @endauth
                  </form>
          </div>

          <p class="lh-md">
            {{$blog->body}}
          </p>
        </div>
      </div>
    </div>
                    <x-comment-form :blog="$blog"/>
    <!-- subscribe new blogs -->

    <section class="blogs_you_may_like">

                    <x-blog_you_may_like_section :randomBlogs="$randomBlogs" />

          </section>




{{--
      <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" >
        <div class="carousel-indicators">
          @foreach ($randomBlogs->chunk(1) as $key => $blogChunk)
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $key + 1 }}"></button>
          @endforeach
        </div>

        <div class="carousel-inner">
          @foreach ($randomBlogs->chunk(1) as $key => $blogCollections )
            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="5000">
              @foreach ($blogCollections as $blogCollection )
              <a href="{{ route('blog:detail', ['blog' => $blogCollection->id]) }}">
                <img src='{{asset("storage/$blogCollection->thumbnail")}}' class="w-25 h-25" alt="...">
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
      </div> --}}


@endsection



