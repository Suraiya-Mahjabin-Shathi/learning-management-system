@extends('backend.master')

@section('content')

<div class="container mt-3">

 <h3>Update Course Form:- </h3>


    <form action=" {{ route('course.update',$course->id) }}" method="POST" enctype="multipart/form-data">
    
        @method('put')

        @if($errors->any())
        @foreach ($errors->all() as $message)
        <p class="alert alert-danger">{{ $message }}</p>
        @endforeach
        @endif

        
        @csrf

        <div style="padding: 20px">    
            <div> 
                <label for="">Enter User Name:</label><br>
                <input value="{{ $course->user->name}}" type="text" class="form-control" name="user_id" >
            </div>
        <div> 
            <label for="">Enter Course name:</label><br>
            <input value="{{ $course->name}}" type="text" class="form-control" name="name" >
        </div>
        <div>
            <label for="">Category Type:</label>
            <select class="form-control" name="type">
            <option @if($course->type=='designing') selected @endif value="designing">Designing</option>
            <option @if($course->type=='technology') selected @endif  value="technology">Technology</option>
            <option @if($course->type=='language') selected @endif value="language">Language</option>
            <option @if($course->type=='kids') selected @endif value="technology">Kid's</option>
            <option @if($course->type=='free course') selected @endif value="technology">Free Course</option>
            </select>
        </div>
        <div> 
            <label for="">Upload image:</label><br>
            <input value="{{ $course->image}}" type="file"  name="image" >
        </div>
        <div>
            <label for="">Content:</label>
            <textarea value="{{ $course->content}}" class="form-control" name="content"></textarea>
        </div> 
        <div>
            <label for="">Price:</label>
            <input value="{{ $course->price}}" type="text" class="form-control" name="price" >
        </div> <br>
        <div> 
            <button class="btn btn-success">Update</button>
         </div><br>
    
    </form>
</div> 

    
@endsection