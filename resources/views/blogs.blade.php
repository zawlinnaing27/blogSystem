@extends('layout/main')

@section('title', 'Page Title')

@section('content')
 <!-- hero section -->
 <section class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="/image/logo.png" alt="" width="250" />
    <h1 class="display-5 fw-bold">Creative Coder Myanmar</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 lh-lg mt-4">
        Creative Coder ဆိုတာကတော့ Programming Language နဲ့ပက်သက်
        ပြီးလမ်းပျောက်နေတဲ့ လူငယ်တွေ ၊ Web development လောကထဲ စတင်
        ဝင်ချင်သူတွေအတွက် အခမဲ့အတန်းလေးများရော | fees ဖြင့် အတန်းများရော
        Online Course လေးတွေဖွင့်ပေးကာသင်ပေးသော
        ကျောင်းလေးပဲဖြစ်ပါတယ်ခင်ဗျ။နေ့စဉ်နှင့်အပတ်စဉ်လဲ လေ့လာသူတို့ ဗဟုသုတ
        တိုးအောင် Tricks & blogs များအစဉ်မပြတ်တင်ပေးသော ကျောင်းလေးဖြစ်ပါတယ်။
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a
          href="#subscribe"
          type="button"
          class="btn btn-primary btn-lg px-4 gap-3"
        >
          Subscribe Now
        </a>
        <a
          type="button"
          class="btn btn-outline-secondary btn-lg px-4"
          href="#blogs"
        >
          Read Blogs
        </a>
      </div>
    </div>
  </section>
{{-- @foreach($blogs as $blog)

<h1>{{$blog->title}}</h1>
<span>Author Name -</span> <br>
<spam   >{{$blog->intro}}</spam>
<p>{{$blog->body}}</p> --}}
 <!-- blogs section -->
 <section class="container text-center" id="blogs">
    <h1 class="display-5 fw-bold mb-4">Blogs</h1>
    <div class="">
      <select name="" id="" class="p-1 rounded-pill">
        <option value="">Filter by Category</option>
      </select>
      <select name="" id="" class="p-1 rounded-pill mx-3">
        <option value="">Filter by Tag</option>
      </select>
    </div>
    <form action="" class="my-3">
      <div class="input-group mb-3">
        <input
          type="text"
          autocomplete="false"
          class="form-control"
          placeholder="Search Blogs..."
        />
        <button
          class="input-group-text bg-primary text-light"
          id="basic-addon2"
          type="submit"
        >
          Search
        </button>
      </div>
    </form>

    <div class="row">
        @foreach ($blogs as $blog )
      <div class="col-md-4 mb-4 ">

        <div class="card h-100">
          <img
            src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
            class="card-img-top"
            alt="..."
          />
          <div class="card-body">
            <h3 class="card-title">{{$blog->title}}</h3>
            <p class="fs-6 text-secondary">
             {{$blog->author->name}}
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
              {{$blog->intro}}
            </p>
            <a href="{{ route('blog:detail', ['blog' => $blog->id]) }}" class="btn btn-primary">Read More</a>
          </div>
        </div>

      </div>
      @endforeach
    </div>
  </section>




@endsection
