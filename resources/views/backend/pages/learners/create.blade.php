@extends('backend.master')

@section('content')

<h4>New Learner Create</h4>

<form action="{{ url('/learner/store') }} " method="post">

     @if ($errors->any())
        @foreach ($errors->all() as $message )
        <p class="alert alert-danger">{{ $message }}</p>  
        @endforeach
         
     @endif
    
    @csrf

    <div style="padding: 20px">    
    
    <div> 
        <label for="">Enter Learner name:</label><br>
        <input type="text" name="name" >
    </div>
    <div> 
        <label for="">Enter Learner Password:</label><br>
        <input type="password" name="password" >
    </div>
    <div> 
        <label for="">Enter Address:</label><br>
        <input type="text" name="address">
    </div>
    <div> 
        <label for="">Enter Learner image:</label><br>
        <input type="file" name="image" >
    </div>
    <div> 
        <label for="">Enter Learner E-mail:</label><br>
        <input type="email"  placeholder="Enter email" name="email">
    </div>
    <div> 
        <label for="">Enter Learner Mobile Number:</label><br>
        <input type="select"  placeholder="Enter mobile number" name="Mobile_number">
    </div>
    <div> 
        <label for="">Enter Learner Date of Birth:</label><br>
        <input type="date" name="Birth_date">
    </div>
    <div> 
        <label for="">Select Gender:</label><br>
        <input type="radio" name="Gender"> Male  <br>
        <input type="radio" name="Gender"> Female <br>
    </div>
    <div>
        <label for="">Exam Mark</label><br>
        <input type="number" name="mark">
    </div>
    <div > 
        <input type="checkbox" name="Remember">Remember me
    </div><br>

    <div> 
       <button class="btn btn-primary">Submit</button>
    </div>



</form>
</div> 

    
@endsection