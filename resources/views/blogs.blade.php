@extends('layout/main')

@section('title', 'Page Title')

@section('content')

@foreach($blogs as $blog)

<h1>{{$blog->title}}</h1>
<p>{{$blog->intro}} <br>
    {{$blog->body}}
</p>


@endforeach

@endsection
