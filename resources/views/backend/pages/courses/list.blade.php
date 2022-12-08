@extends('backend.master')

@section('content')

<div class="container mt-3">

  <h1>This is Course List</h1>

  <a href="{{ route(('courses.create')) }}" class="btn btn-success">Create New Course</a>

  <h4>Course List</h4>  

    
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th> 
            <th scope="col">Course Name</th>
            <th scope="col">Course type</th>
            <th scope="col">Image</th>
            <th scope="col">Content</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach($courses as $data)
          <tr>
            <th scope="row"> {{ $data->id }}</th>
            <td> {{ $data->name }} </td>
            <td> {{ $data->type }} </td>
            <td>
              <img src="{{url('/uploads/',$data->image)}}" height="70" width="70"  alt="course_image">
            </td>
            <td> {{ $data->content }}</td>
            <td>
                <a href=" " class="btn btn-primary">View</a>
                <a href=" " class="btn btn-success">Edit</a>
                <a href=" " class="btn btn-danger">Delete</a>
      
              </td>
          </tr>
          @endforeach
          
        </tbody>
  </table>

@endsection