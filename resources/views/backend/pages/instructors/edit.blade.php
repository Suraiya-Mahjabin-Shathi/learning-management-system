@extends('backend.master')

@section('content')

<div class="container mt-3">

<h4>Update Instructor Form:</h4>

<form action="{{ route('instructor.update',$instructor->id) }}" method="post" enctype="multipart/form-data" >

@method('put')

    @if($errors->any())
    @foreach ($errors->all() as $message)
    <p class="alert alert-danger">{{ $message }}</p>
    @endforeach
    @endif

    @csrf

  <div style="padding: 20px">

    <div>
        <label for=" ">Instructor's Name:</label><br>
        <input value="{{$instructor->name }}" type="text"  class="form-control" name='name'>
    </div>
    <div>
        <label for=" ">Instructor's Address:</label><br>
        <input value="{{$instructor->address }}" type="text" class="form-control" name="address">
    </div>
    <div>
        <label for=" ">Instructor's Image:</label><br>
        <input value="{{$instructor->image }}" type="file" class="form-control" name="image">
    </div>
    <div>
        <label for=" ">Instructor's E-mail:</label><br>
        <input value="{{$instructor->email }}" type="email" class="form-control" name="email">
    </div>
    <div>
        <label for=" ">Instructor's Mobile Number:</label><br>
        <input value="{{$instructor->mobile}}" type="text" class="form-control" name="mobile">
    </div>
    <div>
        <label for=" ">Date of Birth:</label><br>
        <input value="{{$instructor->date_of_birth}}" type="date" class="form-control" name="date_of_birth">
    </div>
   

    <button class="btn btn-success">Update</button>
  </div>
  
</form>
</div>   



@endsection