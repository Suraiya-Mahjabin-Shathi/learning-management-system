@extends('backend.master')

@section('content')

<div class="container mt-3">


  @if(session()->has('message'))
  <p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
  <p class="alert alert-danger">{{session()->get('error')}}</p>
@endif
 

  <a href="{{ route(('courses.create')) }}" class="btn btn-success">Create New Course</a>
 
  <h1>This is Course List</h1> 

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th> 
            <th scope="col">Instructor ID</th>
            <th scope="col">Course Name</th>
            <th scope="col">Course type</th>
            <th scope="col">Image</th>
            <th scope="col">Content</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>

            @foreach($courses as $key=>$data)
          <tr>
            <th scope="row"> {{ $key+1}}</th>
            <td> {{ $data->user_id }} </td>
            <td> {{ $data->name }} </td>
            <td> {{ $data->type }} </td>
            <td>
              <img src="{{url('/uploads/',$data->image)}}" height="70" width="70"  alt="course_image">
            </td>
            <td> 
              <a href=" {{route('admin.course.content',$data->id)}} " class="btn btn-info">Content</a>
            
            </td>
            <td> {{ $data->price }}</td>
            <td>
                <a href=" {{route('admin.course.view',$data->id)}}" class="btn btn-primary">View</a>
                <a href="{{route('admin.course.edit',$data->id)}} " class="btn btn-success">Edit</a>
                <a href="{{route('admin.course.delete',$data->id)}}" class="btn btn-danger">Delete</a>
      
              </td>
          </tr>
          @endforeach
          
        </tbody>
  </table>
</div>
@endsection