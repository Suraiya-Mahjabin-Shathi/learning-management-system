@extends('backend.master')

@section('content')

<div class="container mt-3">
  
  @if(session()->has('message'))
  <p class="alert alert-success">{{session()->get('message')}}</p>
  @endif

  @if(session()->has('error'))
  <p class="alert alert-danger">{{session()->get('error')}}</p>
  @endif

  <a href="{{ route('learner.create') }}" ></a>

 

  <h1>This is Learner list.</h1><br>
    
    <table class="table">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Learner_Name</th>
          <th scope="col">Address</th>
          <th scope="col">Image</th>
          <th scope="col">Email</th>
          <th scope="col">Mobile</th>
          <th scope="col">Date of Birth</th>
          <th scope="col">Gender</th> 
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
     @foreach($learn as $key=>$data)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$data->name}}</td>
          <td>{{$data->address}}</td>
          <td>
            <img width="100px" style="border-radius: 10px" src="{{url('/uploads/'.$data->image)}}" alt="image">
          </td>
          <td>{{$data->email}}</td>
          <td>{{$data->mobile}}</td>
          <td>{{$data->date_of_birth}}</td>
          <td>{{$data->gender}}</td>
          <td>
            <a href="{{route('admin.learner.view',$data->id)}}" class="btn btn-primary">View</a>
            <a href="{{route('admin.learner.edit',$data->id)}}" class="btn btn-success">Edit</a> 
            <a href="{{route('admin.learner.delete',$data->id)}}"> </a>
          </td>          
        </tr>
       @endforeach
      </tbody>
    </table>
  </div>
  

@endsection