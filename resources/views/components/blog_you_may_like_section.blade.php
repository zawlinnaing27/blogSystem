@props(['randomBlogs'])
<div class="container">
    <h3 class="text-center my-4 fw-bold">Blogs You May Like</h3>

    <div class="row text-center">
        @foreach ( $randomBlogs as $randomBlog )
        <div class="col-md-4 mb-4">
          <div class="card">
            <img
              src="https://creativecoder.s3.ap-southeast-1.amazonaws.com/blogs/GOLwpsybfhxH0DW8O6tRvpm4jCR6MZvDtGOFgjq0.jpg"
              class="card-img-top"
              alt="..."
            />
            <div class="card-body">
              <h3 class="card-title">{{$randomBlog->title}}</h3>
              <p class="fs-6 text-secondary">
                {{$randomBlog->name}}
                <span> - {{$randomBlog->updated_at->diffForHumans()}}</span>
              </p>
              <div class="tags my-3">
                <span class="badge bg-primary">{{$randomBlog->category->name}}</span>

              </div>
              <p class="card-text">
                {{$randomBlog->intro}}
              </p>
              <a href="{{ route('blog:detail', ['blog' => $randomBlog->id]) }}" class="btn btn-primary">Read More</a>
            </div>
          </div>

      </div>
      @endforeach

    </div>
</div>


