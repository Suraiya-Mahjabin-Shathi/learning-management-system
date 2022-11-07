@extends('backend.master')

@section('content')



<div class="container mt-3">

  <h1>This is Category List</h1>

  <a href="{{url('Categories/create')}}" class="btn btn-success">Create New Category</a>

  <h4>Category List</h4>  

  <table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Category Name</th>
        <th scope="col">Category Status</th>
        <th scope="col">Image</th>
        <th scope="col">Description</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    
    <tbody>

      @foreach($cats as $data)

      <tr>
        <th scope="row">{{ $data->id }}</th>
        <td>{{ $data->name }}</td>
        <td>{{ $data->status }}</td>
        <td>
          <img src="{{ $data->image }}" alt="category_image">
        </td>
        <td>{{ $data->description }}</td>

        <td>
          <a href=" " class="btn btn-primary">View</a>
          <a href=" " class="btn btn-success">Update</a>
          <a href=" " class="btn btn-danger">Delete</a>

        </td>
      </tr>

      @endforeach


    </tbody>
  </table>
</div>

</body>
</html>


@endsection