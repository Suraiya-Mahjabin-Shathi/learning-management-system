@extends('backend.master')

@section('content')



<div class="container mt-3">

<h1>Instructor List</h1> <br>


@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif

@if(session()->has('error'))
<p class="alert alert-danger">{{session()->get('error')}}</p>
@endif

<a href="{{ route('instructor.create') }}"></a>

<table class="table">

    <thead>
        <tr>
           <th scope="col">ID</th>
           <th scope="col">Instructor_Name</th>
           <th scope="col">Address</th>
           <th scope="col">Image</th>
           <th scope="col">Email</th>
           <th scope="col">Mobile</th>
           <th scope="col">Date_of_Birth</th>
           <th scope="col">Gender</th>
           <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($time as $key=>$data)
        <tr>
            <th scope="row">{{$key+1}}</th>

            <td>{{$data->name}}</td>
            <td>{{$data->address}}</td>
            <td>
                <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" height="50"  width="50" alt="instructor's_image">
              </td>
            <td>{{$data->email}}</td>
            <td>{{$data->mobile}}</td>
            <td>{{$data->date_of_birth}}</td>
            <td>{{$data->gender}}</td>
           
            <td>
              <a href="{{route('admin.instructor.view',$data->id)}}" class="btn btn-primary">View</a>
              <a href="{{route('admin.instructor.edit',$data->id)}}" class="btn btn-success">Edit</a>
              <a href="{{route('admin.instructor.delete',$data->id)}}" class="btn btn-danger">Delete</a>
  
            </td>          
          </tr>
          
         @endforeach
        
    </tbody>
</table>
</div>


@endsection