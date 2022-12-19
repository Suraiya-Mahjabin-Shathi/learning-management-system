@extends('backend.master')

@section('content')

<h1>This is Enrollment list</h1> <br>

<a href="{{ route('enrollment.create')}}"  class="btn btn-success">Enroll New Course</a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">User_ID</th>
        <th scope="col">Course_ID</th>
        <th scope="col">Enrollment_date</th>
        <th scope="col">Payment_date</th>
        <th scope="col">Amount</th>
        <th scope="col">Payment_type</th>
        <th scope="col">Transaction_ID</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cats as $key=>$data)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td> {{$data->user_id}}</td>
        <td> {{$data->course_id}}</td>
        <td>{{$data->enrollment_date }}</td>
        <td>{{$data->payment_date}}</td>
        <td>{{$data->amount  }}</td>
        <td>{{$data->payment_type }}</td>
        <td>{{$data->transaction_id }}</td>
        <td>
            <a href="{{route('admin.enrollment.view',$data->id)}} " class="btn btn-primary">View</a>
            <a href=" " class="btn btn-success">Edit</a>
            <a href="{{route('admin.enrollment.delete',$data->id)}} " class="btn btn-danger">Delete</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
    
@endsection