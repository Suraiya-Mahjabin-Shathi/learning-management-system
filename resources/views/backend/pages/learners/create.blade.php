@extends('backend.master')

@section('content')

<h4>New Learner Create</h4><br>

<h6>Here is the Learner Form-</h6>
<form action=" ">

    <div style="padding: 20px">    
    
    <div> 
        <label for="">Enter Learner name</label><br>
        <input type="text" >
    </div><br>
    <div> 
        <label for="">Enter Password</label><br>
        <input type="password">
    </div><br>
    <div> 
        <label for="">Enter Learner image</label><br>
        <input type="file" >
    </div><br>
    <div> 
        <label for="">Enter Learner Date of Birth</label><br>
        <input type="date" >
    </div><br>
    <div> 
        <label for="">Enter Learner E-mail</label><br>
        <input type="email"  placeholder="Enter email">
    </div><br>
    <div> 
        <label for="">Enter Learner Mobile Number</label><br>
        <input type="select"  placeholder="Enter mobile number">
    </div><br>
    <div> 
        <label for="">Male or Female</label><br>
        <input type="radio" >Male <br>
        <input type="radio" >Female
    </div><br>
    <div> 
        <label for="">Enter Learner Exam Mark</label><br>
        <input type="number"  placeholder="Enter mobile number">
    </div><br>


    <div > 
        <input type="checkbox">Remember me</label>
    </div><br>

    <div> 
       <button class="btn btn-primary">Submit</button>
    </div><br>



</form>
</div> 

    
@endsection