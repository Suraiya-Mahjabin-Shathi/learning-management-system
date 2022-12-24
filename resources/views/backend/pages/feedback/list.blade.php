@extends('backend.master')

@section('content')

<div class="container mt-3">

<h1>Feedback list</h1> <br>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User ID</th>
        {{-- <th scope="col">User Name</th> --}}
        {{-- <th scope="col">User Email</th> --}}
        <th scope="col">Course ID</th>
        {{-- <th scope="col">Course Name</th> --}}
        <th scope="col">Feedback</th>
      </tr>
    </thead>
    <tbody>
      @foreach($feedbacks as $key=>$data)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td> {{$data->user->name}}</td>
        {{-- <td> {{$data->user->name}}</td> --}}
        {{-- <td> {{$data->email}}</td> --}}
        <td> {{$data->course->name}}</td>
        {{-- <td> {{$data->course_name}}</td> --}}
        <td>{{$data->feedback}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection