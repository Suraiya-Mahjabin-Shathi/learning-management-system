@extends('backend.master')

@section('content')
<h4>New Learner Create</h4><br>

<h6>Here is the Learner Form-</h6>
<form action="{{ url('/learner/store') }} " method="post">
    @csrf

    <div style="padding: 20px">    
    
    <div> 
        <label for="">Enter Learner name</label><br>
        <input type="text" name="name" >
    </div><br>
    <div> 
        <label for="">Enter Password</label><br>
        <input type="password" name="password">
    </div><br>
    <div> 
        <label for="">Enter Learner image</label><br>
        <input type="file" name="image" >
    </div><br>
    <div> 
        <label for="">Enter Learner Date of Birth</label><br>
        <input type="date" name="Birthdate">
    </div><br>
    <div> 
        <label for="">Enter Learner E-mail</label><br>
        <input type="email"  placeholder="Enter email" name="email">
    </div><br>
    <div> 
        <label for="">Enter Learner Mobile Number</label><br>
        <input type="select"  placeholder="Enter mobile number" name="Mobilenumber">
    </div><br>
    <div> 
        <label for="">Gender</label><br>
        <input type="radio" name="Gender"> Male </label> <br>
        <input type="radio" name="Gender"> Female </label> <br>
        
    </div><br>
    <div> 
        <label for="">Enter Learner Exam Mark</label><br>
        <input type="number"  placeholder="Enter mark" name="Exammark">
    </div><br>


    <div > 
        <input type="checkbox" name="Remember">Remember me
    </div><br>

    <div> 
       <button class="btn btn-primary">Submit</button>
    </div><br>



</form>
</div> 

    
@endsection