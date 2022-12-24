@extends('backend.master')

@section('content')

<div class="container mt-3">

  
  @if(session()->has('message'))
    <p class="alert alert-success">{{session()->get('message')}}</p>
  @endif

  @if(session()->has('error'))
    <p class="alert alert-danger">{{session()->get('error')}}</p>
  @endif

<h1>This is Enrollment list</h1> <br>

<a href="{{ route('enrollment.create')}}"  > </a>


<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Learner Name</th>
        <th scope="col">Course Name</th>
        <th scope="col">Enrollment_date</th>
        <th scope="col">Payment_date</th>
        <th scope="col">Amount</th>
        <th scope="col">Payment_type</th>
        <th scope="col">Transaction_ID</th>
        <th scope="col">Status</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach($cats as $key=>$data)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td> {{$data->user->name}}</td>
        <td> {{$data->course->name}}</td>
        <td>{{$data->enrollment_date }}</td>
        <td>{{$data->payment_date}}</td>
        <td>{{$data->amount  }}</td>
        <td>{{$data->payment_type }}</td>
        <td>{{$data->transaction_id }}</td>
        <td>{{$data->status}}</td>
        <td>
            <a href="{{route('admin.enrollment.accept',$data->id)}} " class="btn btn-primary">Accept</a>
            <a href="{{route('admin.enrollment.reject',$data->id)}} " class="btn btn-danger">Reject</a>
        </td>
      </tr>
      @endforeach
      
    </tbody>
  </table>
</div>
@endsection