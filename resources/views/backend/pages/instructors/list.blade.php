@extends('backend.master')

@section('content')



<div class="container mt-3">

    

<h1>Instructor List</h1>

<a href="{{ route('instructor.create') }}" class="btn btn-success">Create New Instructor</a>

<h5>New Instructor List </h5>

<table class="table">

    <thead>
        <tr>
           <th scope="col">ID</th>
           <th scope="col">Learner_Name</th>
           <th scope="col">Address</th>
           <th scope="col">Image</th>
           <th scope="col">Mobile</th>
           <th scope="col">Email</th>
           <th scope="col">Date_of_Birth</th>
           <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($time as $data)
        <tr>
            <th scope="row">{{$data->id}}</th>

            <td>{{$data->name}}</td>
            <td>{{$data->address}}</td>
            <td>
                <img src="{{$data->image}}" alt="image">
              </td>
            <td>{{$data->email}}</td>
            <td>{{$data->mobile}}</td>
            <td>{{$data->date_of_birth}}</td>
           
            <td>
              <a href="" class="btn btn-primary">View</a>
              <a href="" class="btn btn-success">Update</a>
              <a href="" class="btn btn-danger">Delete</a>
  
            </td>          
          </tr>
          
         @endforeach
        
    </tbody>


</table>



@endsection