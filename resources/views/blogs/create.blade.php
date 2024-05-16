@extends('layout/main')

@section('title', 'Page Title')
@section('content')
    @if (session('success'))
        <div class="alert alert-success text-center ">{{ session('success') }}</div>
    @endif
    <div class="container">
        <div class="row mt-5">

            <div class="col-md-2 mx-auto my-5">

                    <ul class="list-group mt-3">
                        <li class="list-group-item "><a class="icon-link icon-link-hover " style="--bs-link-hover-color-rgb: 25, 135, 84; text-decoration: none;" href="/" >
                            Dashboard

                          </a></li>
                        <li class="list-group-item"><a class="icon-link icon-link-hover " style="--bs-link-hover-color-rgb: 25, 135, 84; text-decoration: none;" href="/blogs/create">
                            Create Blog

                          </a></li>
                      </ul>

            </div>

            <div class="col-md-8 mx-auto my-5">

                <x-card-wrapper>
                    <form action="{{ route('blog:store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <h2 class="text-primary text-center">Blog Create Form</h2>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input required value="{{ old('title') }}" type="text" class="form-control" id="title"
                                aria-describedby="emailHelp" name='title'>
                            @error('title')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror

                        </div>


                        <div class="mb-3">
                            <label for="category" class="form-label">Category</label>
                            <select name="category_id" id="category" class="form-control">
                                @foreach ($categories as $category)
                                    <option {{ $category->id == old('category_id') ? 'selected' : '' }}
                                        value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('category_id')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input required value="{{ old('slug') }}" type="text" class="form-control" id="slug"
                                aria-describedby="emailHelp" name='slug'>
                            @error('slug')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="intro" class="form-label">Intro</label>
                            <input required value="{{ old('intro') }}" type="text" class="form-control" id="intro"
                                aria-describedby="emailHelp" name='intro'>
                            @error('intro')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>



                        <div class="mb-3">
                            <label for="body" class="form-label">Body</label>
                            <textarea name="body" id="body" class="form-control"></textarea>
                            @error('body')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="thumbnail" class="form-label">Body</label>
                            <input type="file" name="thumbnail" id="thumbnail" class="form-control">
                            @error('thumbnail')
                                <p class="text-danger">
                                    {{ $message }}
                                </p>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary float-end">Post</button>
                    </form>
                </x-card-wrapper>

            </div>
        </div>
    </div>
@endsection
