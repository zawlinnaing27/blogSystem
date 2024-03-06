@extends('layout/main')
@section('title', 'All Blogs')

@section('content')
        {{-- blogFilter --}}
        <x-blogFilter :categories="$categories" />

    <div class="row">
        {{-- All Blog List --}}
        <x-allBlogCard :blogs="$blogs" />
    </div>

    <x-subscribe/>

        <x-pagination  :blogs="$blogs" />




@endsection
