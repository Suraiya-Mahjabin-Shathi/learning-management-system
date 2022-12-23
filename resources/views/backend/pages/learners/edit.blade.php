@extends('backend.master')

@section('content')

<div class="container mt-3">

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
            <input value="{{ $learner->name }}" type="text" name="name" class="form-control" required>
        </div>
        <div> 
            <label for="">Enter Address:</label><br>
            <input value="{{ $learner->address }}" type="text" name="address" class="form-control"  required>
        </div>
        <div> 
            <label for="">Enter Learner image:</label><br>
            <input value="{{ $learner->image }}" type="file" name="image" class="form-control" required>
        </div>
        <div> 
            <label for="">Enter Learner E-mail:</label><br>
            <input value="{{ $learner->email }}" type="email"  placeholder="Enter email" name="email"class="form-control"  required>
        </div>
        <div> 
            <label for="">Enter Learner Mobile Number:</label><br>
            <input value="{{ $learner->mobile}}" type="select"  placeholder="Enter mobile number" name="mobile" class="form-control" required|numeric|digits:11>
        </div>
        <div> 
            <label for="">Enter Learner Date of Birth:</label><br>
            <input value="{{ $learner->date_of_birth }}" type="date" name="date_of_birth" class="form-control"  required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Update</button>
       </div>
        <div> 
            <label for="">Select Gender:</label><br>
            <select  name="gender" id="gender" class="form-control">
            <option @if($learner->gender=='male') selected @endif  value="male"> Male </option> 
            <option @if($learner->gender=='female') selected @endif  value="female"> Female </option>
        </div>  
       
    </div> 
    </form>
</div>


    
@endsection