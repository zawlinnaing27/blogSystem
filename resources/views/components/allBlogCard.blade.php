@props(['blogs'])

@forelse ($blogs as $blog )
<div class="col-md-4 mb-4 ">

  <div class="card h-100">
    <img
      src='{{asset("storage/$blog->thumbnail")}}'
      class="card-img-top  h-100 rounded"
      alt="..."
    />
    <div class="card-body text-center">
      <h3 class="card-title">{{$blog->title}}</h3>
      <p class="fs-6 text-secondary">
        <a href="{{route('blogs',['userId'=> $blog->author->id])}}">{{$blog->author->name}}</a>



        <span> - {{$blog->created_at->diffForHumans()}}</span>
      </p>
      <div class="tags my-3">
        <a href="{{route('blogs', ['categoryId' => $blog->category->id])}}"><span class="badge bg-primary">{{$blog->category->name}}</span></a>
        {{-- <span class="badge bg-secondary">Css</span>
        <span class="badge bg-success">Php</span>
        <span class="badge bg-danger">Javascript</span>
        <span class="badge bg-warning text-dark">Frontend</span> --}}
      </div>
      <div class="card-text ">
        <p >
            {{$blog->intro}}
          </p>
      </div>

      <a href="{{ route('blog:detail', ['blog' => $blog->id ]) }}" class="btn btn-primary ">Read More</a>
    </div>
  </div>
</div>
@empty
<h1 class="text-center">There is no blog</h1>
@endforelse
