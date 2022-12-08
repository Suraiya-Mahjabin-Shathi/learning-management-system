@extends('backend.master')

@section('content')

<h4>Instructor Form:</h4>

<form action="{{ route('instructor.store') }}" method="post" enctype="multipart/form-data" >

    @if($errors->any())
    @foreach ($errors->all() as $message)
    <p class="alert alert-danger">{{ $message }}</p>
    @endforeach
    @endif


    @csrf

  <div style="padding: 20px">

    <div>
        <label for=" ">Instructor's Name:</label><br>
        <input type="text" class="form-control" name='instructor_name'>
    </div>
    <div>
        <label for=" ">Instructor's Address:</label><br>
        <input type="text" class="form-control" name="instructor_address">
    </div>
    <div>
        <label for=" ">Instructor's Image:</label><br>
        <input type="file" class="form-control" name="image">
    </div>
    <div>
        <label for=" ">Instructor's E-mail:</label><br>
        <input type="text" class="form-control" name="instructor_email">
    </div>
    <div>
        <label for=" ">Instructor's Mobile Number:</label><br>
        <input type="text" class="form-control" name="instructor_mobile">
    </div>
    <div>
        <label for=" ">Date of Birth:</label><br>
        <input type="date" class="form-control" name="date_of_birth">
    </div>
   

    <button class="btn btn-success">Submit</button>
  </div>
  
</form>
    



@endsection