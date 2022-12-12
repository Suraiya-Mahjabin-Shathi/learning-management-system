@extends('backend.master')

@section('content')

<h4>Update Learner Form:</h4>

  <form action="{{ route('learner.update',$learner->id) }}" method="post" enctype="multipart/form-data">
   @method('put')

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
        <input type="select"  placeholder="Enter mobile number" name="mobile">
    </div>
    <div> 
        <label for="">Enter Learner Date of Birth:</label><br>
        <input type="date" name="date_of_birth">
    </div>
    <div> 
        <label for="">Select Gender:</label><br>
        <input type="radio" name="gender"> Male  <br>
        <input type="radio" name="gender"> Female <br>
    </div>
    <div> 
       <button class="btn btn-primary">Update</button>
    </div>


</form>
</div> 

    
@endsection