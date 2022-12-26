@extends('frontend.master')

@section('content')


<style type="text/css">
.gradient-custom {
/* fallback for old browsers */
background: #f6d365;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right bottom, rgba(246, 211, 101, 1), rgba(253, 160, 133, 1))
}
</style>


<h1> Update Profile</h1>


@if($errors->any())
@foreach($errors->all() as $message)
  <p class="alert alert-danger">{{$message}}</p>
@endforeach
@endif

@if(session()->has('message'))
<p class="alert alert-success">{{session()->get('message')}}</p>
@endif



<form action="{{route('profile.update', auth()->user()->id)}}" method="post" enctype="multipart/form-data">

    @method('put')

    @csrf
    
    
    <div style="padding: 20px">    
        
      <div> 
          <label for="">User name:</label><br>
          <input value="{{ auth()->user()->name }}" type="text" class="form-control" name="name" placeholder="Enter user name" >
      </div>
      <div> 
        <label for="">User Designation:</label><br>
        <input value="{{ auth()->user()->designation }} " type="text" class="form-control" name="designation" placeholder="Enter user designation" >
      </div>
      <div> 
        <label for="">User Role:</label><br>
        <input value="{{ auth()->user()->role }} " type="text" class="form-control" name="role" placeholder="Enter user designation" >
      </div>
      <div> 
          <label for="">Upload image:</label><br>
          <input value="{{ auth()->user()->image }}" type="file" class="form-control" name="image" placeholder="Upload user image" >
      </div>
      <div>
          <label for="">User E-mail:</label>
          <input value="{{ auth()->user()->email }}" type="email" class="form-control" name="email" placeholder="Enter user email" >
      </div> 
      <div>
        <label for="">User Mobile:</label>
        <input value="{{ auth()->user()->mobile }}" type="numeric" class="form-control" name="mobile" placeholder="Enter user mobile number" >
    </div> 
    <div>
      <label for="">User Gender:</label>
      <input value="{{ auth()->user()->gender }}" type="text" class="form-control" name="gender" placeholder="Enter user gender" >
    </div>
    <div>
      <label for="">User Password:</label>
      <input value="{{ auth()->user()->password }}" type="password" class="form-control" name="password" placeholder="Enter user password" >
    </div>
    <div>
      <label for="">Date of Birth:</label>
      <input value="{{ auth()->user()->date_of_birth }}" type="date" class="form-control" name="date_of_birth" placeholder="Enter user date-of-birth" >
    </div>
    <div>
      <label for="">User Address:</label>
      <input value="{{ auth()->user()->address }}" type="text" class="form-control" name="address" placeholder="Enter user address" >
    </div><br>
      <div> 
          <button class="btn btn-success">Submit</button>
       </div><br>
  
  
</form>
    
@endsection