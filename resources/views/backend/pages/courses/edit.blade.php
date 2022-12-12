@extends('backend.master')

@section('content')

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
            <label for="">Enter Course name:</label><br>
            <input type="text" class="form-control" name="name" >
        </div>
        <div>
            <label for="">Category Type:</label>
            <select class="form-control" name="type">
            <option value="designing">Designing</option>
            <option value="technology">Technology</option>
            </select>
        </div>
        <div> 
            <label for="">Upload image:</label><br>
            <input type="file"  name="image" >
        </div>
        <div>
            <label for="">Content:</label>
            <textarea class="form-control" name="content"></textarea>
        </div> 
        <div>
            <label for="">Price:</label>
            <input type="text" class="form-control" name="price" >
        </div> <br>
        <div> 
            <button class="btn btn-success">Update</button>
         </div><br>
    
    
    </form>
    </div> 

    
@endsection