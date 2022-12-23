@extends('backend.master')

@section('content')

<div class="container mt-3">


    @if(session()->has('message'))
      <p class="alert alert-success">{{session()->get('message')}}</p>
    @endif

    @if(session()->has('error'))
      <p class="alert alert-danger">{{session()->get('error')}}</p>
    @endif


  <a href="{{route('Categories.create')}}" class="btn btn-success">Create New Category</a>

  <h1>Here is the Category List:-</h1> 

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


      @foreach($cats as $key=>$data)
      <tr>
        <th scope="row">{{ $key+1 }}</th>
        <td>{{ $data->name }}</td>
        <td>{{ $data->status }}</td>
        <td>
          <img src="{{url('/uploads', $data->image)}}"  height="70" width="70" alt="category_image">
        </td>
        <td>{{ $data->description }}</td>

        <td>
          <a href="{{route('admin.categories.view',$data->id)}} " class="btn btn-primary">View</a>
          <a href="{{route('admin.categories.edit',$data->id)}}" class="btn btn-success">Edit</a>
          <a href="{{route('admin.categories.delete',$data->id)}}" class="btn btn-danger">Delete</a>

        </td>
      </tr>
      @endforeach


    </tbody>
  </table>
</div>

</body>
</html>


@endsection