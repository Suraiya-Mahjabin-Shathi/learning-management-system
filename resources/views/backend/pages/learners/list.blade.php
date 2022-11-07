@extends('backend.master')

@section('content')




<div class="container mt-3">
 
    <h1>This is Learner list.</h1>
  <a href="{{ url('/learner/create') }}" class="btn btn-success" >Create New Learner</a>
  

    <h2>Learner List</h2> 
    
    
    <table class="table">
      
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Learner_Name</th>
          <th scope="col">Mobile</th>
          <th scope="col">Email</th>
          <th scope="col">Image</th>
          <th scope="col">Action</th>
        </tr>
      </thead>


      <tbody>

        
     @foreach($learn as $data)
        <tr>
          <th scope="row">{{$data->id}}</th>

          <td>{{$data->name}}</td>
          <td>{{$data->Mobile}}</td>
          <td>{{$data->email}}</td>

          <td>
            <img src="{{$data->image}}" alt="image">
          </td>
          <td>
            <a href="" class="btn btn-primary">View</a>
            <a href="" class="btn btn-success">Update</a>
            <a href="" class="btn btn-danger">Delete</a>

          </td>          
        </tr>
        
       @endforeach
      </tbody>
    </table>
  </div>
  
  </body>
  </html>


@endsection