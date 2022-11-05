@extends('backend.master')

@section('content')

<h4>New Learner Create</h4>

<form action="{{ url('/learner/store') }} " method="post">
    @csrf

    <div style="padding: 20px">    
    
    <div> 
        <label for="">Enter Learner name:</label><br>
        <input type="text" name="name" >
    </div>
    <div> 
        <label for="">Enter Password:</label><br>
        <input type="password" name="password">
    </div>
    <div> 
        <label for="">Enter Learner image:</label><br>
        <input type="file" name="image" >
    </div>
    <div> 
        <label for="">Enter Learner Date of Birth:</label><br>
        <input type="date" name="Birthdate">
    </div>
    <div> 
        <label for="">Enter Learner E-mail:</label><br>
        <input type="email"  placeholder="Enter email" name="email">
    </div>
    <div> 
        <label for="">Enter Learner Mobile Number:</label><br>
        <input type="select"  placeholder="Enter mobile number" name="Mobilenumber">
    </div>
    <div> 
        <label for="">Select Gender:</label><br>
        <input type="radio" name="Gender"> Male </label> <br>
        <input type="radio" name="Gender"> Female </label> <br>
        
    </div>
    <div> 
        <label for="">Enter Learner Exam Mark:</label><br>
        <input type="number"  placeholder="Enter mark" name="Exammark">
    </div>


    <div > 
        <input type="checkbox" name="Remember">Remember me
    </div>

    <div> 
       <button class="btn btn-primary">Submit</button>
    </div><br>



</form>
</div> 

    
@endsection