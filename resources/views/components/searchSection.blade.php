<form action="{{route('blogs')}}" class="my-3" method="get">
    <div class="input-group mb-3">
        @if(request('userId'))
        <input
        name="userId"
        type="hidden"
        value="{{request('userId')}}"
      />
      @endif
      @if(request('categoryId'))
        <input
        name="categoryId"
        type="hidden"
        value="{{request('categoryId')}}"
      />
      @endif
      <input
        name="search"
        type="text"
        value="{{request('search')}}"
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
