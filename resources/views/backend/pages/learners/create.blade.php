@extends('backend.master')

@section('content')

<div class="container mt-3">
    
<h4>New Learner Create</h4>

  <form action="{{ route('learner.store')  }}" method="post" enctype="multipart/form-data">
   
    @if ($errors->any())
        @foreach ($errors->all() as $message )
        <p class="alert alert-danger">{{ $message }}</p>  
        @endforeach
         
     @endif
    
    @csrf

    <div style="padding: 20px">    
    
    <div> 
        <label for="">Enter Learner name:</label><br>
        <input type="text" name="name" required>
    </div>
    <div> 
        <label for="">Enter Address:</label><br>
        <input type="text" name="address" required>
    </div>
    <div> 
        <label for="">Enter Learner image:</label><br>
        <input type="file" name="image" required>
    </div>
    <div> 
        <label for="">Enter Learner E-mail:</label><br>
        <input type="email"  placeholder="Enter email" name="email" required>
    </div>
    <div> 
        <label for="">Enter Learner Mobile Number:</label><br>
        <input type="select"  placeholder="Enter mobile number" name="mobile" required|numeric|digits:11>
    </div>
    <div> 
        <label for="">Enter Learner Date of Birth:</label><br>
        <input type="date" placeholder="Enter DOB" name="date_of_birth" required>
    </div>
    <div> 
        <label for="">Select Gender:</label><br>
        <input type="radio" name="gender" value="male"> Male  <br>
        <input type="radio" name="gender" value="female"> Female <br>
    </div>
    <div> 
       <button class="btn btn-primary">Submit</button>
    </div>

</form>
</div> 

    
@endsection