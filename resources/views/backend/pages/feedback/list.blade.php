@extends('backend.master')

@section('content')

<div class="container mt-3">

<h1>Feedback list</h1> <br>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User_ID</th>
        <th scope="col">Course_ID</th>
        <th scope="col">Enrollment_id</th>
        <th scope="col">Feedback</th>
      </tr>
    </thead>
    <tbody>
      @foreach($feedbacks as $key=>$data)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td> {{$data->user_id}}</td>
        <td> {{$data->course_id}}</td>
        <td>{{$data->enrollment_id }}</td>
        <td>{{$data->feedback}}</td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection