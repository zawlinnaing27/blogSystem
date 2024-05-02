@extends('layout/main')

@section('title', 'Page Title')

@section('content')
@if (session('success'))
<div class="alert alert-success text-center">{{session('success')}}</div>
@endif
 <!-- hero section -->
 <section class="px-4 py-5 my-5 text-center">
        <img class="d-block mx-auto mb-4" src="/image/logo.png" alt="" width="250" />
    {{-- <h1 class="display-5 fw-bold">Safe__Zone</h1> --}}
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4 lh-lg mt-4">
        Safe__Zone ဆိုတာကတော့ ကျွန်တော်ရဲ့ စိုက်ထားသော Cannabis အပင် နဲ ပတ်သက်ပီး blog လေးတွေကို ရေးပေးသွားမှာဖစ်ပါတယ်။
      </p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
        <a
          type="button"
          class="btn btn-outline-secondary btn-lg px-4"
          href="{{route('all:blogs')}}"
        >
          Read Blogs
    </a>
      </div>
    </div>
  </section>

 <section class="container text-center" id="blogs">
    <x-blogFilter :categories="$categories"
                  :currentCategory="$currentCategory" />
    <x-searchSection />

    <div class="row">
         <x-allBlogCard :blogs="$blogs"  />
    </div>
  </section>


       <x-pagination :blogs="$blogs" />





@endsection
