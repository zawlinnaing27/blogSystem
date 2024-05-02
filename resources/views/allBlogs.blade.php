@extends('layout/main')
@section('title', 'All Blogs')

@section('content')
        {{-- blogFilter --}}
        <x-blogFilter :categories="$categories"  />
        <x-searchSection />

    <div class="row">
        {{-- All Blog List --}}
        <x-allBlogCard :blogs="$blogs" />
    </div>

        <x-pagination  :blogs="$blogs" />




@endsection
