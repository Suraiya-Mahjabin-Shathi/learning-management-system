@extends('backend.master')

@section('content')

<h4>Instructor Form:</h4>

<form action="{{ route('instructor.store') }}" method="post" >

    @csrf

  <div style="padding: 20px">

    <div>
        <label for=" ">Instructor's Name:</label><br>
        <input type="text"  name='instructor_name'>
    </div><br>
    <div>
        <label for=" ">Instructor's Address:</label><br>
        <input type="text"  name="instructor_address">
    </div><br>
    <div>
        <label for=" ">Instructor's Image:</label><br>
        <input type="text"  name="instructor_image">
    </div><br>
    <div>
        <label for=" ">Instructor's E-mail:</label><br>
        <input type="text"  name="instructor_email">
    </div><br>
    <div>
        <label for=" ">Instructor's Mobile Number:</label><br>
        <input type="text"  name="instructor_mobile">
    </div><br>
    <div>
        <label for=" ">Date of Birth:</label><br>
        <input type="date"  name="date_of_birth">
    </div><br>
    <div> 
        <input type="checkbox" name="Remember">Remember me
    </div><br>

    <button class="btn btn-success">Submit</button>
  </div>
  
</form>
    



@endsection