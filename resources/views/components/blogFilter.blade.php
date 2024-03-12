
@props(['categories','currentCategory'])
<h1 class="d-flex justify-content-center display-5 fw-bold my-4">Blogs</h1>
    <div class="d-flex justify-content-center mb-3">
        <div class="dropdown">
            <span class="btn btn-outline-primary dropdown-toggle"  role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              {{isset($currentCategory) ? $currentCategory->name : 'Filter By Category'}}
            </span>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">

            @foreach ( $categories as  $category)
                <li><a class="dropdown-item" href="{{route('filters', ['categoryId' => $category->id])}}"  >{{$category->name}}</a></li>
            @endforeach
              </ul>
          </div>

    </div>

      {{-- {{-- <select name="" id="" class="p-1 rounded-pill mx-3">
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
    </form> --}}
