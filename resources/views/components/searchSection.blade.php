<form action="{{route('blogs')}}" class="my-3" method="get">
    <div class="input-group mb-3">
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
