@extends('backend.master')

@section('content')

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
        <input type="text"  class="form-control" name='name'>
    </div>
    <div>
        <label for=" ">Instructor's Address:</label><br>
        <input type="text" class="form-control" name="address">
    </div>
    <div>
        <label for=" ">Instructor's Image:</label><br>
        <input type="file" class="form-control" name="image">
    </div>
    <div>
        <label for=" ">Instructor's E-mail:</label><br>
        <input type="email" class="form-control" name="email">
    </div>
    <div>
        <label for=" ">Instructor's Mobile Number:</label><br>
        <input type="text" class="form-control" name="mobile">
    </div>
    <div>
        <label for=" ">Date of Birth:</label><br>
        <input type="date" class="form-control" name="date_of_birth">
    </div>
   

    <button class="btn btn-success">Update</button>
  </div>
  
</form>
    



@endsection